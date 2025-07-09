<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::with('category')
            ->KeywordSearch($request->keyword)
            ->GenderSearch($request->gender)
            ->CategorySearch($request->category_id)
            ->DateSearch($request->created_at)
            ->paginate(7)
            ->appends($request->all());
        $gender_map = [
            '1' => '男性',
            '2' => '女性',
            '3' => 'その他'
        ];
        foreach ($contacts as $contact) {
            $contact->gender_label = $gender_map[$contact->gender];
        };
        return view('admin', compact('contacts'));
    }
    public function destroy(Request $request)
    {
        $contact = Contact::find($request->id);
        if (!$contact) {
            return redirect('admin')->with('notfound', '該当データが見つかりませんでした');
        }
        $contact->delete();
        return redirect('admin')->with('message', '削除しました');
    }

    // csvエクスポート　GPT結果より

    public function export(Request $request)
    {
        $contacts = Contact::with('category')
            ->KeywordSearch($request->keyword)
            ->GenderSearch($request->gender)
            ->CategorySearch($request->category_id)
            ->DateSearch($request->created_at)
            ->get();

        $csvHeader = [
            'お名前（姓）',
            'お名前（名）',
            '性別',
            'メールアドレス',
            '電話番号',
            '住所',
            '建物名',
            'お問い合わせ種別',
            'お問い合わせ内容',
            '登録日時'
        ];

        $gender_map = [
            '1' => '男性',
            '2' => '女性',
            '3' => 'その他'
        ];

        $response = new StreamedResponse(function () use ($contacts, $csvHeader, $gender_map) {
            $handle = fopen('php://output', 'w');
            // 文字化け対策（Excel 用 BOM）
            fputs($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($handle, $csvHeader);

            foreach ($contacts as $contact) {
                fputcsv($handle, [
                    $contact->last_name,
                    $contact->first_name,
                    $gender_map[$contact->gender] ?? '',
                    $contact->email,
                    $contact->tel,
                    $contact->address,
                    $contact->building,
                    $contact->category->content ?? '',
                    $contact->detail,
                    $contact->created_at,
                ]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="contacts.csv"');

        return $response;
    }
}
