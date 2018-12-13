<?php

return [
    'alipay' => [
        'app_id'         => '2016092200570895',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvACmf28MPrxcE5YsL1tuXLXCysyaQuiHtuHEzK9b8vK1DRAV+XSHogluhVpGCetAfoyFRIrtIro6/HrlLMLn2/bVbJKHpIYHyRkOs7N+9wZF3GdvKgM1jewPpCJ+bN5SKvHENKQqWUrzXjS2a5UHZchEEZOtN1KRF1ocni5EpLjcIflYzXnmRwVdHHg1lpPWiLum6IWgqMnFqnbYqfp0KF4chfV0U50Pvzsfwsgz8sPyXBS4OgwV28wqm+/IlCvgW6iF0duepyHGBeLTxxv8UOtouymK+2EhgAFLLFzz/ZSD3p6fbmI4LGyPLEtqJRPPp1EYyLBaipmZe23cd22yxQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAvACmf28MPrxcE5YsL1tuXLXCysyaQuiHtuHEzK9b8vK1DRAV+XSHogluhVpGCetAfoyFRIrtIro6/HrlLMLn2/bVbJKHpIYHyRkOs7N+9wZF3GdvKgM1jewPpCJ+bN5SKvHENKQqWUrzXjS2a5UHZchEEZOtN1KRF1ocni5EpLjcIflYzXnmRwVdHHg1lpPWiLum6IWgqMnFqnbYqfp0KF4chfV0U50Pvzsfwsgz8sPyXBS4OgwV28wqm+/IlCvgW6iF0duepyHGBeLTxxv8UOtouymK+2EhgAFLLFzz/ZSD3p6fbmI4LGyPLEtqJRPPp1EYyLBaipmZe23cd22yxQIDAQABAoIBAQCUb28F7oecgNuyGz+HpIjeaiQCOskRSsbcfiUD9vCCQV7xkWHIM1ljdk7suvnRmwyw3gHavFW+tYsdDWskjD7ETX702jx+idRb0ozpFS+JmkpOWtxKL355L4ip7xIiouX9QiXH6lYFakf8eWIOTvwoQJZ9yjtZEre72EoAGkfYRT8P/lwYsLuxAT1iM+BvH3jrHZsy0qIDN6tCyDWctku0r+s2PK1fNkH54a0z/ngapRTu/koJ4WmVlJupZEIqlgQJe70ScscHacs2vyPLwAV0SgSdp8CTlFL40VzlpFJPhRhDGQOJ7C4/rQHtArdnQigoDPJq0xQMnxWs+hnivRmBAoGBAPp3cbYuZ9ESX55lOdbMlyoXdGMtccxa31YMpkBZO7w5uy9gQ/cmg8iApQ6y2yGG98OZ838FJAyi+l4C+c9lvfNUTPkb3GbOGssW2fOWWmV5UxrJqLo4LkIbk6k6cMGCCW24vOyooSSiMPdKCrnn6jVzH1SgPG2H5sVjguaSQeDbAoGBAMAn7ipYFKxj/+o8dj5RqneDDo43mu4Ah5Ly5L0t2yyO4DIktFIiUK8FalX7SXhA6ElBo421PtsyLdrbI1p5MbFYat/B82Bn57MOA4UakqRbZa2Hhv+lznd4g19++lPKHIrJp7idnzwrQ/npgyj8cT58wgVs+i9Y4xqkvh9j3rzfAoGAfwv1bx7M5F04iWT5WL6AcwZgsCoODkWOAdz6u6tHxKtYCqj+8K/lqt+uWe1ZgAExTlOaErUt2wcUjnld89i86F+7h6SdQLyNFLUrqwZ6JfzLrcvavVLgDAJm/TE6nr1yQOizVCwZSTbINbemBzTfNWuG2etJm5mS8k8OyBwqNH8CgYEAtbZNBCANVMSwIrsQenhSAvidkCHHUiCQFIe7habSp/1oyCJrn2wx7oDpgOvEG4MN5xC6cOyfxztZn6gxc4I+Wt4pGvZXh6hatLmg3IM3f1OrAIG0SRdr+xCs82appQjxGtH92Ji+F3E2tCN91Al9scDa3bSjlpixEuYNoLOZ0/MCgYEA9yHjbo7phaXF5SflFN0Gzucp+L0VxvQpHqTYenIxUewjK8ox+rJJyI58x7mZiqS5fN5xyi5I9Pf+GEr1ojQDAVQPDyZJ1jmS2X5fnWsQPgxngwNNWpuuidlhUSzjqVc8qQPfAWu47BFAY2nrBzRUzMJebSHWphbyrHywRx8r5Rk=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];