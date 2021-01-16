<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// AWS Credentials
$bucketName = 'image-rec-iitb';
$IAM_KEY = 'AKIAUUYCXP63YKYJEJYO';
$IAM_SECRET = '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';

try {
    $s3 = S3Client::factory(
        array(
            'credentials' => array(
                'key' => $IAM_KEY,
                'secret' => $IAM_SECRET,
                'ACL'    => 'public-read'
            ),
            'version' => 'latest',
            'region'  => 'ap-south-1'
        )
    );
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
