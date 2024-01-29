<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportController extends Controller
{
    public function export(Request $request)
    {
        dd($request);
        $contacts = Contact::all();
        $csvHeader = ['ID', '姓', '名', '性別', 'メールアドレス', '電話番号', '住所', '建物名', '問い合わせの種類', '問い合わせ内容', '作成日時', '更新日時'];
        $csvData = $contacts->toArray();
        $date = new DateTime();
        $fileName = 'Contacts'.$date->format('_ymdHis').'.csv';
        // $dateTime = new DateTime($csvData[0]['created_at']);
        // dd(new DateTime($csvData[0]['created_at'])->format('Y/m/d H:i:s'));
        // dd($dateTime->format('Y/m/d H:i:s'));
        // dd($csvData[0]['created_at']);

        $response = new StreamedResponse(function () use ($csvHeader, $csvData) {
            $handle = fopen('php://output', 'w');
            fwrite($handle, pack('C*', 0xEF, 0xBB, 0xBF));
            fputcsv($handle, $csvHeader);

            foreach ($csvData as $row) {
                fwrite($handle, $row['id'].',');
                fwrite($handle, $row['last_name'].',');
                fwrite($handle, $row['first_name'].',');
                if ($row['gender'] == 1)
                    fwrite($handle, '男性,');
                else if ($row['gender'] == 2)
                    fwrite($handle, '女性,');
                else if ($row['gender'] == 3)
                    fwrite($handle, 'その他,');
                fwrite($handle, $row['email'].',');
                fwrite($handle, $row['tell'].',');
                fwrite($handle, $row['address'].',');
                fwrite($handle, $row['building'].',');
                fwrite($handle, Category::find($row['category_id'])->content.',');
                fwrite($handle, $row['detail'].',');
                $dateTime = new DateTime($row['created_at']);
                fwrite($handle, $dateTime->format('Y/m/d H:i:s').',');
                $dateTime = new DateTime($row['updated_at']);
                fwrite($handle, $dateTime->format('Y/m/d H:i:s')."\n");
                // fwrite($handle, new DateTime($row['updated_at'])->format('YYYY/mm/dd HH:ii:ss').',');
                // fwrite($handle, $row['updated_at']->format('YYYY/mm/dd HH:ii:ss'));
            }

            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv',
            // 'Content-Disposition' => 'attachment; filename="contacts.csv"',
            'Content-Disposition' => 'attachment; filename=contacts.csv',
        ]);

        return $response;
    }
}