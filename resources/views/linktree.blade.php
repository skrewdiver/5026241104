<!DOCTYPE html>
<html lang="en">

<head>
    <title>LinkTree PWeb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @font-face {
            font-family: 'Link Sans Product';
            src: url(https://assets.production.linktr.ee/fonts/LinkSansProduct.woff2) format('woff2');
        }

        html,
        body {
            font-family: 'Link Sans Product', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(54, 60, 62);
        }

        body {
            padding-top: 40px;
            display: flex;
            justify-content: center;
        }

        .container {
            justify-content: center;
            min-height: 100vh;
            width: 580px;
            max-width: 100%;
            background-color: rgba(42, 50, 53);
            border-radius: 25px 25px 0 0;
            box-shadow: 0 15px 20px 1px rgba(0, 0, 0, 0.19);
        }

        .top-section {
            padding: 30px 10px 0 10px;
        }

        .top-btn {
            background-color: rgba(191, 194, 195);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .top-btn:hover {
            background-color: rgb(235, 235, 235);
        }

        .profile-caption {
            font-weight: 700;
        }

        .links-section {
            padding: 0 10px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .link-btn {
            background-color: white;
            border: none;
            border-radius: 7px;
            padding: 20px 20px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 500;
            color: rgb(17, 17, 17);
            text-align: center;
            transition: background 0.2s;
            position: relative;
        }

        .link-btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .link-btn .dots {
            position: absolute;
            right: 20px;
            color: rgb(88, 88, 88);
            font-size: 15px;
            line-height: 1;
        }

        .footer {
            gap: 8px;
            padding: 100px 20px;
            font-size: 13px;
            flex-wrap: wrap;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Top Section -->
        <div class="top-section d-flex justify-content-between mb-4">
            <div>
                <button class="top-btn">
                    <svg fill="none" height="18px" width="18px" viewBox="0 0 28 28" class="animation_rotate__SBERF">
                        <path
                            d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                            fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            <div class="d-flex">
                <button class="top-btn mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z">
                        </path>
                    </svg>
                </button>
                <button class="top-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Middle Section -->
        <div class="mid-section d-flex justify-content-center mb-4">
            <div class="profile text-center">
                <img class="rounded-circle "
                    src="https://ugc.production.linktr.ee/iaFeHumXR3uGqCocRxVk_tKOfF72z4vu9291S?io=true&size=avatar-v3_0"
                    alt="" style="width:96px;height:96px">
                <div class="profile-caption text-white mt-3">
                    <h4 class="mb-0 font-weight-bold">Infinix Indonesia</h4>
                    <p class="mb-0">Official Online Store</p>
                </div>
            </div>
        </div>

        <!-- Links Section -->
        <div class="links-section">
            <button class="link-btn">
                Shopee
                <span class="dots">⋮</span>
            </button>
            <button class="link-btn">
                Tokopedia
                <span class="dots">⋮</span>
            </button>
            <button class="link-btn">
                Lazada
                <span class="dots">⋮</span>
            </button>
            <button class="link-btn">
                Service Center
                <span class="dots">⋮</span>
            </button>
            <button class="link-btn">
                Official Website
                <span class="dots">⋮</span>
            </button>
        </div>

        <!-- Footer -->
        <div class="footer d-flex justify-content-center">
            <small>
                <span>Cookie Preferences</span>
                <span>•</span>
                <span>Report</span>
                <span>•</span>
                <span>Privacy</span>
                <span>•</span>
                <span>Explore</span>
            </small>
        </div>
    </div>
</body>

</html>
