<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function about() {
        $title = 'Tentang kami'; //mengisi judul url isi kata yagn kita mau
        //membuat deklarasi untuk data yang dikiirm ke halaman
        //untuk items contoh aray dalam aray
        $dataimg['images'] = [
            ['file' => 'foto.jpg', 'description' => 'Dia adalah pendiri KKS Consulting, dengan latar belagnan pendidikan sebagai berikut'],
            ['file' => 'profile.jpg', 'description' => 'Dia adalah peserta baru sebagai contoh gambar saja'],
            ['file' => 'foto_2.jpg', 'description' => 'Tambahkan gambar ini sebagai cerita. Dia adalah pendiri KKS Consulting, dengan latar belagnan pendidikan sebagai berikut'],
            ['file' => 'foto_3.jpg', 'description' => 'Tes gambar lagi Dia adalah pendiri KKS Consulting, dengan latar belagnan pendidikan sebagai berikut'],
            ['file' => 'profile.jpg', 'description' => 'Dia adalah peserta baru sebagai contoh gambar saja'],
            ['file' => 'foto_2.jpg', 'description' => 'Tambahkan gambar ini sebagai cerita. Dia adalah pendiri KKS Consulting, dengan latar belagnan pendidikan sebagai berikut'],
            ['file' => 'profile.jpg', 'description' => 'Dia adalah peserta baru sebagai contoh gambar saja'],
            ['file' => 'foto_2.jpg', 'description' => 'Tambahkan gambar ini sebagai cerita. Dia adalah pendiri KKS Consulting, dengan latar belagnan pendidikan sebagai berikut']
            // Tambahkan gambar lainnya
        ];
        $data = [
            'nama' => 'KKS CONSULTING',
            'alamat' => 'Jl. Ceempaka Biru No. 17, Denpasar Bali',
            'telp' => '0361419299',
            'email' => 'wkresna@gmail.com',
            'items' => [
                [
                    'icon' => 'fab fa-linkedin-in',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-facebook',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-yahoo',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-tiktok',
                    'link' => 'google.com'
                ]
            ]

        ];
        return view('frontend.pages.about.index',[
            'title_page' => $title,
            'data' => $data,
            'dataimg' => $dataimg
        ]);
    }
    function experience() {
        $title = 'exp'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.experience.index',[
            'title_page' => $title
        ]);
    }
    function education() {
        $title = 'exp'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.education.index',[
            'title_page' => $title
        ]);
    }
    function skills() {
        $title = 'skils';
        $title2 = 'Keahlian Yang Dimiliki'; //mengisi judul url isi kata yagn kita mau
        $title3 = 'Keahlian kami sebagai berikut :'; //mengisi judul url isi kata yagn kita mau
        $data = [
            'head' => [
                [
                    'nama' => 'Computer Programmer',
                    'divisi' => 'Aksara Konsultama',
                    'jenisService' => [
                        ['jenis' => 'Akuntansi',
                        'ket' => 'Kami mengerjakan program-program akuntansi yang bisa terintegrasi ke laporan keuangan'
                        ],
                        ['jenis' => 'Payroll',
                        'ket' => 'Kami mengerjakan program-program payroll yang terintegarasi dengan perhitungan PPh 21'
                        ],
                        ['jenis' => 'POS',
                        'ket' => 'Kami mengerjakan program-program penjualan yang bisa diintegrasikan antara laporan keuangan, inventori, kaklukasi haraga pokok dan lainnya, sehingga memberikaninformasi yang memadai bagi penggunaknya'
                        ],
                        ['jenis' => 'Lainnya',
                        'ket' => 'Lainnya'
                        ],
                    ]
                ],
                [
                    'nama' => 'Register Tax Consultant',
                    'divisi' => 'KKP Wayan Keresna',
                    'jenisService' => [
                        ['jenis' => 'Konsultasi',
                        'ket' => 'Memberikan konsutlasi dan bimingan teknis untuk segala urusan perpajakan sesuai ketentuan peraturan yang berlaku'
                        ],
                        ['jenis' => 'Litigasi',
                        'ket' => 'Kami memberikan jasa dalam rangka pemeriksaan, kebertan dan banding'
                        ],
                        ['jenis' => 'Review',
                        'ket' => 'Kegiatan ini merupakan kegian untuk menemukan potensi-potensi pajak yang mungkin ada pada transkais keuangan perusahaan'
                        ]
                    ]
                ],
                [
                    'nama' => 'Lawyer & Legal Service',
                    'divisi' => 'WK Law Firm',
                    'jenisService' => [
                        ['jenis' => 'Konsultasi',
                        'ket' => 'Memberikan konsutlasi dan bimingan teknis untuk segala urusan hukum'
                        ],
                        ['jenis' => 'Litigasi',
                        'ket' => 'Kami memberikan jasa dalam rangka pedampingan kasus perdata dan pidana'
                        ],
                        ['jenis' => 'Legal Opinion',
                        'ket' => 'Memberikan pandapat-pendapat hukum'
                        ],
                        ['jenis' => 'Lainnya',
                        'ket' => 'Lainnya'
                        ],
                    ]
  
                ]
            ],
            'Pajak' => [
                'Judul1' => 'Silahkan hubungi tim kami',
                'Judul2' => 'Jika anda membutuhkan bantuan',
            ]

        ];

        return view('frontend.pages.skills.index',[
        'title_page' => $title,
        't2' => $title2,
        't3' => $title3,
        'data' => $data,
        ]);
    }
    function interest() {
        $title = 'int'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.interest.index',[
            'title_page' => $title
        ]);
    }
    function awards() {
        $title = 'awards'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.awards.index',[
            'title_page' => $title
        ]);
    }


}
