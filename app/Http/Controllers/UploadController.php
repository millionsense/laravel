<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Aws\S3\S3Client;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        dump($request->input());
        dump($request->file());

        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'ap-northeast-2',
        ]);

        try {
            $result = $s3->putObject([
                'Bucket' => 's3-key-test',
                'Key'    => $request->file('attachFile')->getClientOriginalName(),
                'Body'   => fopen($request->file('attachFile')->getRealPath(), 'r'),
                //'ACL'    => 'public-read',
            ]);

            return $result;
        } catch (Aws\S3\Exception\S3Exception $e) {
            echo "There was an error uploading the file.\n";
        }
    }//end of upload()

}//end of class
