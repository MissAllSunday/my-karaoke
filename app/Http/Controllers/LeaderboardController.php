<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Kreait\Firebase\Database;
use Kreait\Firebase\Exception\ApiException;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class LeaderboardController extends Controller
{
    /**
     * @var Database
     */
    private $firebase;

    public function __construct()
    {
        $this->firebase = $this->getDatabase();
    }

    public function show()
    {
        $statistics = $this->getOrderedStatistics();
        $this->formatPoints($statistics);


        return view('leaderboard', [ 'statistics' => $statistics ]);
    }

    private function formatPoints(array &$statistics): void
    {
        foreach($statistics as &$user) {
            $user['points'] = number_format($user['points']);
        }
    }

    private function getOrderedStatistics(): array
    {
        $statistics = $this->getStatistics();
        usort(
            $statistics,
            function($a, $b) { return $a['points'] < $b['points']; }
        );

        return $statistics;
    }

    private function getDatabase()
    {
        $config = [
            "type" => "service_account",
            "project_id" => "my-karaoke-c0a51",
            "private_key_id" => "b98da203a068ff9d84c19ad8de0578952119fc89",
            "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEuwIBADANBgkqhkiG9w0BAQEFAASCBKUwggShAgEAAoIBAQC7R/hBVLBJgyg1\nD9Qw9jShz9sy64rEhjDjEFVp9VdZLZk8YPADWIZP3zdt+gMasQ35R1rYM4AHkYCO\n7y9jz82keIcKiOza9xihpCoxUyqfsUTT2DQU30zJ2lpBgqp1bLiayr+cpzY6wVGL\nefHNSgdgUrmFhrPt+r2IQb1CeBe3FWpdDHvgThfreMnEebFs8+TAdXAQBe2er3qR\niEbGP6odYV7VCHvuwS8MW7wJLC9G8iBHeElSXe0wPllXp2YEL1/ysxz7EbYll/5S\nv1u8xPoqZWwjBLIOxD3fwrmJEfyJhJ7yuQyT/1VIe/3xrTTisI+uuGpGq1tshhHH\nHGtOG0O7AgMBAAECgf9En45gQJjqtETygmI7n0d30TJ2p0WA/Lw/o5ErkJeJQ6Qr\nILueuJpCb7in9TcHnvEWynUv9KrSER7OMujNFZCEAtCL1yNJshTcYQhRtLByX4Zs\nZ/H8whoseVI9XgzBB49Ao4WB35tVQg6pOeK0dTWUm2PKHgFdIy869VBuHC/lSZ7q\nyFLsmWNNZfsk8CP6Q0pATCWQJqT17r1BOCfAuOlEC54RT5yUjaAStqZSy4cKT3Jf\nobgv4nm0ZH/PEPxR/hTSeLjhDx/Zk1HtxtmUM0g1MKUwLIZeUwLEqZzk+ZlkEh69\nIX0bGEUEl6MVqfnZnGnIC5Fzx4qAnJRRxNcHKeECgYEA86X66bX/G7xVXzuufz/G\nL/MIX3GQ35+55dHT/HruYedHuoF63OfTBLxDaIpvqdPsAY+f05L8rFhqiFDqUe61\n5Itv9E5t6ZVjkPrFhq200iEF+KXYgnaALV36tpyqMDInHryCoIhsdHQ15KHTUyEZ\n6KS2njxjQu9le05YC0NcCdkCgYEAxMZ3iuBMyDfbBSKm4yghdsXyXt8kiUg3dAx2\nZMNZSLAxC+slTFBH9QthD5ylFiPRBLCnMHWlZ+LvYuweIop5xdNOxIBhXfNeUmRu\nwVumveb64FTD8sk5IqotfDZBWKZ5zmGcZ2YqXvK0vu8RP8zQbVC5t89mZoixl66l\np1kNybMCgYBXdo/Z8dFAPZ1P8Ha1i0kz0USCLpxZCleLXoWArwh/8KxZET3vqvCf\nVI3GK1vmVQL1lH9FThCSNbMYeCOFgfGdt0hbJQRjw5LYao0ZyaWNgPlJxw8v1iYx\nIvlrMFYPsxFEAVvLEO4N5+Goz0azIsDQOMCtkPP5BUMivn7wnB+gEQKBgDMjgR3O\nfSXrnjgPcV/Hpiq/9uVBCLXE1uSJ+JrnSeTiJVz7l43lr023z1nHVAAU/tVBM7Ic\nYQhGqgADbTF823jWGbpnwuYvwWuYPlByCTuBM+HpJaOLOBYSNA/76a+oVC+Wnpcg\nrhJO8TpN1yXFjMVcHWfvtqUfEUhiUxrSwgqRAoGBAOUPmfjvWK56mjghi4JsCn7T\nLnIos9IsNg4y6IMUN7SSwYhQnXt2QcU3M/qSdnItO+htBlutsSzYjGoTgXYas4Ms\nGBokdx2/n8vlPpTEVhD2jWgslkDsL87A3Hx8cczQKIflwmSz2FgjADLqPGBh+aLE\nIsMKYloMLeGgA3Uz/TN4\n-----END PRIVATE KEY-----\n",
            "client_email" => "firebase-adminsdk-8yzl4@my-karaoke-c0a51.iam.gserviceaccount.com",
            "client_id" => "115735379990886885107",
            "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
            "token_uri" => "https://oauth2.googleapis.com/token",
            "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
            "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-8yzl4%40my-karaoke-c0a51.iam.gserviceaccount.com"
        ];

        $serviceAccount = ServiceAccount::fromArray($config);

        $firebase = (new Factory())
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri("https://my-karaoke-c0a51.firebaseio.com/")
            ->create();

        return $firebase->getDatabase();
    }

    /**
     * @throws ApiException
     * @return array
     */
    private function getStatistics(): array
    {
        $singerList = $this->firebase
            ->getReference('singer_list')
            ->getValue();
        $singers = [];

        foreach ($singerList as $singerKey => $singer) {
            $singers[] = [
                'id' => $singerKey,
                'name' => $singer['name'],
                'points' => $singer['score']
            ];
        }

        return $singers;
    }
}
