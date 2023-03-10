<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- flat icon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <!-- slick -->
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Elmas academy - home</title>
</head>
<body>
   
<!--  navbar -->
<?php 
    include('partial/header.php');
?>
<!-- end of navbar -->


<!-- hero -->
<div class="top-hearo-container">
    <div class="hero-text-container">
        <div class="hero-text">
            <svg width="308" height="40" viewBox="0 0 308 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2_88)">
                <path d="M6.81676 8.43294V11.8525C6.81676 12.1915 7.06834 12.4651 7.37983 12.4651H19.6476C19.9591 12.4651 20.2107 12.7386 20.2107 13.0776V18.4954C20.2107 18.8344 19.9591 19.1079 19.6476 19.1079H7.37983C7.06834 19.1079 6.81676 19.3815 6.81676 19.7205V23.7526C6.81676 24.0916 7.06834 24.3651 7.37983 24.3651H21.0014C21.3128 24.3651 21.5644 24.6387 21.5644 24.9777V30.3955C21.5644 30.7345 21.3128 31.008 21.0014 31.008H6.19378C2.77343 31.008 0 27.9869 0 24.2581V5.82218C0 3.25304 1.91085 1.17157 4.27096 1.17157H21.0014C21.3128 1.17157 21.5644 1.44514 21.5644 1.78412V7.2019C21.5644 7.54088 21.3128 7.81445 21.0014 7.81445H7.37983C7.06834 7.82039 6.81676 8.09396 6.81676 8.43294Z" fill="white"/>
                <path d="M136.299 0H140.894L153.101 31.008H148.507L145.093 21.6711H131.884L128.386 31.008H124.097L136.299 0ZM133.196 18.198H143.781L138.575 3.73476H138.486L133.196 18.198Z" fill="#33CCFF"/>
                <path d="M170.904 15.7657C170.611 14.3443 170 13.2441 169.065 12.4651C168.131 11.686 166.879 11.2935 165.303 11.2935C163.962 11.2935 162.841 11.5373 161.937 12.0309C161.032 12.5245 160.314 13.1728 159.774 13.9875C159.235 14.7963 158.846 15.73 158.612 16.7886C158.379 17.8472 158.265 18.9355 158.265 20.0654C158.265 21.1062 158.391 22.1231 158.636 23.1044C158.882 24.0916 159.271 24.9658 159.798 25.733C160.326 26.5002 161.002 27.1186 161.835 27.5766C162.668 28.0404 163.68 28.2724 164.878 28.2724C166.717 28.2724 168.149 27.7966 169.185 26.8391C170.221 25.8817 170.856 24.5376 171.09 22.8011H174.894C174.486 25.5784 173.444 27.7312 171.767 29.2477C170.089 30.7701 167.807 31.5254 164.92 31.5254C163.201 31.5254 161.673 31.24 160.35 30.6809C159.02 30.116 157.912 29.325 157.025 28.314C156.132 27.303 155.468 26.0898 155.012 24.6863C154.557 23.2828 154.335 21.7425 154.335 20.0595C154.335 18.3824 154.557 16.8124 154.994 15.3494C155.432 13.8864 156.097 12.6137 156.983 11.5254C157.87 10.4371 158.978 9.58668 160.308 8.96224C161.637 8.3378 163.201 8.02855 165.01 8.02855C166.292 8.02855 167.496 8.18317 168.616 8.48647C169.736 8.78977 170.73 9.25959 171.593 9.89593C172.456 10.5323 173.162 11.3351 173.713 12.3045C174.265 13.2739 174.618 14.4276 174.762 15.7597H170.904V15.7657Z" fill="#33CCFF"/>
                <path d="M199.076 30.9248C198.405 31.3292 197.512 31.5314 196.41 31.5314C195.446 31.5314 194.685 31.2578 194.116 30.7047C193.547 30.1576 193.265 29.2715 193.265 28.0583C192.247 29.2715 191.055 30.1576 189.701 30.7047C188.347 31.2519 186.88 31.5314 185.304 31.5314C184.286 31.5314 183.316 31.4124 182.393 31.1864C181.471 30.9604 180.68 30.5858 180.009 30.0803C179.338 29.5748 178.805 28.9206 178.41 28.1237C178.014 27.3268 177.817 26.3634 177.817 25.2334C177.817 23.9607 178.038 22.92 178.476 22.1053C178.913 21.2965 179.488 20.6363 180.201 20.1308C180.914 19.6253 181.734 19.2388 182.651 18.983C183.567 18.7214 184.508 18.5073 185.472 18.3289C186.49 18.1267 187.461 17.972 188.383 17.8709C189.3 17.7698 190.108 17.6271 190.809 17.4368C191.51 17.2465 192.061 16.9729 192.474 16.6102C192.882 16.2474 193.085 15.7181 193.085 15.0223C193.085 14.2135 192.93 13.5593 192.624 13.0657C192.319 12.5721 191.923 12.1974 191.444 11.9358C190.965 11.6741 190.426 11.5016 189.827 11.4124C189.228 11.3232 188.641 11.2816 188.054 11.2816C186.478 11.2816 185.167 11.5789 184.118 12.1737C183.07 12.7684 182.501 13.8864 182.411 15.5397H178.691C178.751 14.1481 179.039 12.9765 179.566 12.019C180.093 11.0616 180.794 10.2884 181.668 9.69372C182.543 9.09902 183.543 8.67083 184.663 8.4151C185.784 8.15343 186.988 8.0226 188.275 8.0226C189.294 8.0226 190.312 8.09396 191.318 8.23669C192.325 8.37942 193.235 8.67678 194.05 9.12875C194.865 9.58073 195.523 10.2052 196.021 11.0199C196.518 11.8287 196.763 12.8873 196.763 14.1897V25.7449C196.763 26.6131 196.811 27.2495 196.919 27.6539C197.021 28.0583 197.362 28.2605 197.949 28.2605C198.273 28.2605 198.65 28.1891 199.088 28.0404V30.9248H199.076ZM193.038 19.4112C192.69 19.6729 192.259 19.8751 191.75 20.0178C191.24 20.1606 190.683 20.2855 190.084 20.3866C189.485 20.4877 188.862 20.5769 188.204 20.6482C187.545 20.7196 186.916 20.8147 186.299 20.9277C185.688 21.0467 185.101 21.1894 184.55 21.3619C183.992 21.5343 183.513 21.7722 183.106 22.0815C182.699 22.3848 182.369 22.7713 182.124 23.2293C181.878 23.6931 181.752 24.27 181.752 24.9658C181.752 25.5724 181.878 26.0898 182.124 26.5061C182.369 26.9283 182.693 27.2673 183.088 27.529C183.483 27.7907 183.939 27.981 184.466 28.094C184.993 28.207 185.544 28.2664 186.131 28.2664C187.353 28.2664 188.407 28.0999 189.282 27.7669C190.156 27.4338 190.869 27.0116 191.426 26.5061C191.977 26.0006 192.391 25.4475 192.648 24.8588C192.912 24.264 193.044 23.705 193.044 23.1876V19.4112H193.038Z" fill="#33CCFF"/>
                <path d="M222.743 31.008H219.023V27.9691H218.933C218.322 29.212 217.357 30.116 216.046 30.6809C214.734 31.2459 213.29 31.5254 211.715 31.5254C209.966 31.5254 208.438 31.2043 207.144 30.5679C205.844 29.9316 204.766 29.0693 203.91 27.981C203.047 26.8927 202.4 25.6438 201.963 24.2224C201.526 22.8011 201.304 21.2965 201.304 19.7026C201.304 18.1088 201.514 16.6102 201.939 15.2067C202.358 13.8032 203.005 12.5662 203.862 11.4957C204.724 10.4252 205.803 9.58073 207.096 8.95629C208.396 8.33185 209.906 8.0226 211.625 8.0226C212.176 8.0226 212.799 8.08207 213.482 8.19506C214.165 8.314 214.848 8.50431 215.519 8.78382C216.189 9.05739 216.824 9.42016 217.423 9.87214C218.022 10.3241 218.526 10.8772 218.933 11.5433H219.023V0H222.743V31.008ZM205.245 19.9762C205.245 21.0169 205.383 22.0398 205.659 23.039C205.934 24.0381 206.36 24.9301 206.929 25.7092C207.498 26.4883 208.229 27.1127 209.115 27.5766C210.002 28.0404 211.044 28.2724 212.242 28.2724C213.494 28.2724 214.56 28.0285 215.435 27.5349C216.309 27.0413 217.022 26.399 217.579 25.6021C218.13 24.8052 218.532 23.9013 218.783 22.8903C219.029 21.8793 219.155 20.8504 219.155 19.8037C219.155 18.7035 219.023 17.639 218.759 16.6102C218.496 15.5813 218.082 14.6774 217.513 13.8983C216.944 13.1192 216.207 12.4888 215.303 12.0071C214.398 11.5314 213.302 11.2935 212.02 11.2935C210.738 11.2935 209.666 11.5373 208.804 12.0309C207.941 12.5245 207.252 13.1728 206.725 13.9875C206.198 14.7963 205.821 15.7241 205.587 16.7648C205.359 17.8055 205.245 18.876 205.245 19.9762Z" fill="#33CCFF"/>
                <path d="M247.763 23.8894C247.266 26.4109 246.176 28.314 244.481 29.5986C242.792 30.8891 240.659 31.5314 238.095 31.5314C236.286 31.5314 234.717 31.234 233.393 30.6393C232.063 30.0446 230.949 29.2299 230.045 28.1832C229.14 27.1424 228.463 25.8935 228.008 24.4484C227.553 23.0033 227.301 21.4214 227.241 19.7145C227.241 18.0375 227.505 16.4793 228.026 15.0461C228.553 13.6128 229.29 12.3759 230.236 11.3351C231.183 10.2944 232.309 9.48558 233.603 8.90276C234.903 8.3259 236.322 8.03449 237.868 8.03449C239.88 8.03449 241.552 8.44484 242.875 9.27148C244.199 10.0981 245.265 11.1448 246.068 12.4175C246.871 13.6902 247.422 15.0818 247.727 16.5864C248.033 18.091 248.159 19.5242 248.099 20.8861H231.171C231.141 21.8733 231.261 22.807 231.518 23.6872C231.782 24.5733 232.201 25.3524 232.788 26.0303C233.369 26.7083 234.112 27.2554 235.016 27.6598C235.921 28.0642 236.987 28.2664 238.209 28.2664C239.785 28.2664 241.072 27.9037 242.079 27.1781C243.085 26.4526 243.75 25.3524 244.067 23.8775H247.763V23.8894ZM244.175 17.6331C244.115 16.7648 243.918 15.9381 243.582 15.1591C243.247 14.38 242.798 13.7021 242.229 13.1371C241.659 12.5721 240.989 12.1261 240.216 11.793C239.443 11.46 238.592 11.2935 237.658 11.2935C236.694 11.2935 235.825 11.46 235.052 11.793C234.28 12.1261 233.615 12.584 233.064 13.1609C232.513 13.7377 232.069 14.4157 231.752 15.1829C231.428 15.95 231.243 16.7707 231.183 17.639H244.175V17.6331Z" fill="#33CCFF"/>
                <path d="M251.962 8.55783H255.461V11.8585H255.55C257.24 9.31311 259.678 8.03449 262.858 8.03449C264.26 8.03449 265.524 8.3259 266.662 8.90276C267.8 9.47963 268.603 10.4668 269.07 11.8585C269.831 10.6453 270.825 9.69967 272.065 9.0336C273.305 8.36753 274.671 8.03449 276.156 8.03449C277.295 8.03449 278.319 8.15938 279.241 8.40321C280.158 8.64704 280.949 9.0336 281.602 9.55694C282.254 10.0803 282.77 10.7523 283.135 11.5789C283.5 12.4056 283.68 13.3987 283.68 14.5525V31.014H279.96V16.289C279.96 15.5932 279.9 14.945 279.786 14.3324C279.667 13.7258 279.451 13.1965 279.128 12.7446C278.804 12.2985 278.361 11.9417 277.792 11.68C277.223 11.4184 276.486 11.2875 275.581 11.2875C273.742 11.2875 272.299 11.8109 271.251 12.8516C270.202 13.8924 269.675 15.284 269.675 17.0205V31.008H265.961V16.289C265.961 15.5635 265.895 14.8974 265.764 14.2908C265.632 13.6842 265.404 13.1549 265.087 12.7029C264.763 12.2569 264.326 11.906 263.775 11.6622C263.218 11.4184 262.535 11.2935 261.72 11.2935C260.612 11.2935 259.678 11.5076 258.923 11.9417C258.162 12.3759 257.545 12.8992 257.066 13.5058C256.587 14.1124 256.233 14.7428 256.018 15.397C255.796 16.0511 255.688 16.5923 255.688 17.0265V31.014H251.968V8.55783H251.962Z" fill="#33CCFF"/>
                <path d="M298.158 34.0054C297.721 35.1056 297.29 36.0333 296.87 36.7826C296.445 37.5379 295.978 38.1505 295.469 38.6262C294.959 39.102 294.39 39.4529 293.761 39.667C293.132 39.887 292.414 39.9941 291.599 39.9941C291.162 39.9941 290.724 39.9643 290.287 39.9048C289.85 39.8454 289.425 39.7443 289.017 39.6015V36.2117C289.365 36.3247 289.724 36.4436 290.089 36.5566C290.455 36.6696 290.826 36.7291 291.204 36.7291C291.964 36.7291 292.575 36.5566 293.043 36.2058C293.51 35.8608 293.917 35.3494 294.265 34.6833L295.798 30.8593L286.831 8.53404H291.03L297.637 26.9045H297.727L304.07 8.53404H308.006L298.158 34.0054Z" fill="#33CCFF"/>
                <path d="M26.1708 2.19447C26.1708 1.96253 26.3445 1.77222 26.5781 1.77222H29.5492C30.4238 1.77222 31.1965 2.06958 31.8374 2.66429C32.4544 3.2352 32.7779 3.97859 32.7779 4.88849V30.4014C32.7779 30.6334 32.6042 30.8058 32.3706 30.8058H26.5841C26.3505 30.8058 26.1768 30.6334 26.1768 30.4014V2.19447H26.1708Z" fill="white"/>
                <path d="M55.2648 30.2052C55.2648 30.4371 55.0731 30.6096 54.8395 30.6096H49.1369C48.9033 30.6096 48.7296 30.4371 48.7296 30.2052V16.2533C48.7296 15.0639 48.3881 14.2194 47.7053 13.708C46.9565 13.1787 46.1478 12.8992 45.2673 12.8992C44.3688 12.8992 43.5781 13.1728 42.8772 13.708C42.2123 14.2373 41.8709 15.0877 41.8709 16.2533V30.2052C41.8709 30.4371 41.6972 30.6096 41.4636 30.6096H35.6771C35.4435 30.6096 35.2698 30.4371 35.2698 30.2052V17.3952C35.2698 13.5117 36.318 10.9248 38.3906 9.59262C40.4392 8.30211 42.6197 7.57657 45.0756 7.49331C47.6154 7.49331 50.0714 7.87392 52.126 9.40232C53.8571 7.98097 56.0795 7.57657 58.5354 7.49331C61.0153 7.49331 63.3215 8.12965 65.454 9.42016C67.6344 10.7583 68.7246 13.4047 68.7246 17.3952V30.2052C68.7246 30.4371 68.5329 30.6096 68.2993 30.6096H65.418C63.5192 30.6096 62.1954 29.2953 62.1954 27.41V16.2533C62.1954 15.0639 61.8539 14.2194 61.1711 13.708C60.4223 13.1787 59.6136 12.8992 58.7391 12.8992C57.8645 12.8992 57.0499 13.1728 56.3071 13.708C55.6242 14.2194 55.2828 15.0639 55.2828 16.2533V30.2052H55.2648Z" fill="white"/>
                <path d="M82.5259 30.8177C81.226 30.9426 80.0699 31.008 79.0636 31.008C76.991 31.008 75.176 30.455 73.6186 29.331C72.0192 28.1832 71.2285 26.3217 71.2285 23.711C71.2285 21.2727 71.9533 19.5361 73.4089 18.4716C74.8406 17.4309 76.6136 16.7767 78.7461 16.4139C79.0217 16.4139 79.3871 16.3485 79.8124 16.2652C80.1778 16.1998 80.5791 16.1582 81.0703 16.0928C83.1429 15.7776 84.3409 15.1829 84.3409 14.3562C84.3409 13.7437 84.0234 13.3393 83.3585 13.149C82.5678 12.917 81.819 12.81 81.1362 12.81C79.7045 12.81 78.5964 13.0836 78.1052 14.1243C78.0393 14.273 77.8895 14.3562 77.7398 14.3562H72.2049C71.9473 14.3562 71.7377 14.1421 71.7976 13.8924C72.0312 12.1082 72.8638 10.6453 74.2535 9.46179C75.793 8.18912 78.0333 7.48737 80.8726 7.48737C84.0354 7.48737 86.4255 8.04044 88.0308 9.12281C89.7619 10.2884 90.6125 11.9239 90.6125 14.041V21.5046C90.6125 23.7942 90.1872 25.5784 89.3546 26.851C88.522 28.1475 87.5156 29.0752 86.3416 29.6699C85.1555 30.2884 83.8737 30.669 82.5259 30.8177ZM84.4307 19.8573C83.7239 20.1725 82.8074 20.452 81.7172 20.6839C81.0523 20.8326 80.609 20.9159 80.2856 20.9813L79.8183 21.0883H79.8423C78.9258 21.3203 78.3028 21.6414 77.9434 21.9804C77.602 22.4918 77.4283 23.0627 77.4283 23.5504C77.4283 24.2938 77.602 24.7993 78.0273 25.2275C78.4346 25.5902 79.0756 25.7806 79.9082 25.7806C81.3398 25.7806 82.448 25.3762 83.2387 24.5911C84.0294 23.8061 84.4367 22.6821 84.4367 21.2608V19.8573H84.4307Z" fill="white"/>
                <path d="M93.1224 22.9735C93.1224 22.7416 93.2961 22.5691 93.5298 22.5691H99.1485C99.3821 22.5691 99.5558 22.7594 99.5738 22.9497C99.6157 23.9251 99.9811 24.6447 100.64 25.1145L100.616 25.0907C101.383 25.6021 102.413 25.8519 103.689 25.8519C104.605 25.8519 105.378 25.6795 106.037 25.3226V25.3464C106.57 25.0312 106.828 24.6268 106.828 24.1392C106.828 23.3958 105.78 22.7832 103.689 22.3134H103.713C102.731 22.1647 101.964 21.9982 101.431 21.802C98.5255 21.0586 96.4949 20.1903 95.4047 19.1912C94.2965 18.1088 93.6076 16.628 93.6076 14.9271C93.6076 12.7446 94.4642 10.9188 96.1474 9.45584C97.8966 8.14154 100.143 7.48141 102.856 7.48141C105.786 7.48141 108.152 8.11775 109.949 9.40827C111.68 10.895 112.578 12.7803 112.68 15.0699C112.704 15.3256 112.53 15.5159 112.273 15.5159H108.727C107.553 15.5159 106.654 14.9866 105.995 13.9459L105.378 13.3333C104.779 12.9289 103.947 12.7208 102.946 12.7208C101.94 12.7208 101.173 12.8695 100.682 13.143H100.706C100.341 13.375 100.149 13.7556 100.149 14.2908C100.149 14.9509 101.473 15.5397 104.102 16.0928C104.767 16.3247 105.21 16.408 105.618 16.408C108.547 17.1514 110.596 18.0196 111.728 18.9712C112.86 20.0119 113.435 21.4332 113.435 23.2114C113.435 25.7568 112.494 27.7252 110.638 29.105C108.906 30.3538 106.343 30.9902 102.946 30.9902C99.6996 30.9902 97.2616 30.3301 95.6622 29.0395H95.6862C93.979 27.6836 93.1224 25.733 93.1224 23.2055V22.9735Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_2_88">
                <rect width="308" height="40" fill="white"/>
                </clipPath>
                </defs>
                </svg>                
                <p style="margin: 0; font-family: 'Cairo'; font-style: normal; font-weight: 700; font-size: 30px; color: var(--yellow-);">???????? ?????????? ???? ?????? ???????????????? ???? ???????????? </p>
                <p style="margin: 0; font-family: 'Cairo'; font-style: normal; font-weight: 400; font-size: 21px; color: var(--white-);"> ?????????? ?????????? ?????????? ???????????????? ?????????? ?????? ???????? ?????????? ??????????????.  </p>
            <form action="">
                <input type="email" name="" id="">
                <input type="submit" value="?????????? ???????? !">
            </form>
            
        </div>
    </div>
    <div class="hero-canva">
            <div class="hero-image">
                <img src="assets/photos/hero_picture/Man 2.png" height="100%">
            </div>
            <div class="background-shape">
                <svg class="svg-group" width="596" height="884" viewBox="0 0 596 884" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M274.741 527.907C277.56 518.772 284.488 513.116 290.216 515.284C295.944 517.453 298.308 526.611 295.488 535.746C292.669 544.881 285.741 550.537 280.013 548.369C274.286 546.2 271.921 537.041 274.741 527.907Z" fill="#FFCF66"/>
                    <path d="M211.14 313.605L197.58 13" stroke="#FFCF66" stroke-width="25" stroke-miterlimit="10" stroke-linecap="round"/>
                    <path d="M348.811 797.781L338.844 576.676" stroke="#FFCF66" stroke-width="25" stroke-miterlimit="10" stroke-linecap="round"/>
                    <path d="M263.078 358.468L249.519 57.8632" stroke="#FFCF66" stroke-width="25" stroke-miterlimit="10" stroke-linecap="round"/>
                    <path d="M397.482 871.055L383.922 570.45" stroke="#FFCF66" stroke-width="25" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>                
                <svg width="861" height="970" viewBox="0 0 861 970" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M715.602 950.699C768.076 923.101 817.147 851.375 839.769 784.006C851.518 749.05 879.975 664.287 841.026 594.084C802.657 524.976 739.129 542.393 681.636 472.556C626.889 406.042 652.834 351.771 624.089 263.782C581.146 132.33 438.721 -5.34952 300.202 1.05206C144.975 8.21383 14.681 195.416 1.61399 355.701C-27.6368 714.633 521.683 1052.7 715.602 950.699Z" fill="#FFCF66"/>
                    </svg>                               
            </div>
    </div>


    <!-- mouse scroll -->
    <div class="mouse-scroll-container">
        <div class="mouse-scroll-icon">
            <div></div>
        </div>
    </div>
    <!-- end ofmouse scroll -->
</div>
<!-- end of hero -->



<!-- courses category  -->
<div class="courses-category-container">
    <div class="courses-category-content">
        <p class="courses-category-title" data-aos="fade-right">???????????? ??????????????????</p>
        <div class="courses-category-slider" data-aos="fade-up">
            <div class="courses-category-slider-item">
                <img src="assets/photos/formation category/Web-dev--Thumb.png" width="100%" height="80%" alt="">
                <p>?????????????? ????????????????</p>
            </div>
            <div class="courses-category-slider-item">
                <img src="assets/photos/formation category/Business-Management--Thumb.png" width="100%" height="80%" alt="">
                <p>?????????? ??????????????</p>
            </div>
            <div class="courses-category-slider-item">
                <img src="assets/photos/formation category/Motion-Design--Thumb.png" width="100%" height="80%" alt="">
                <p> ???????? ????????????</p>
            </div>
            <div class="courses-category-slider-item">
                <img src="assets/photos/formation category/Marketing-Digital-Thumb.png" width="100%" height="80%" alt="">
                <p>?????????????? ???????????????????? </p>
            </div>
            <div class="courses-category-slider-item">
                <img src="assets/photos/formation category/Videography--Thumb.png" width="100%" height="80%" alt="">
                <p>?????????????? ??????????????????</p>
            </div>
            <div class="courses-category-slider-item">
                <img src="assets/photos/formation category/Design-Graphic-Thumb.png" width="100%" height="80%" alt="">
                <p>???????? ????????????????</p>
            </div>
        </div>
        <button class="prev-button"><i class="fi fi-sr-angle-right"></i></button>
        <button class="next-button"><i class="fi fi-sr-angle-right"></i></button>
    </div>
</div>
<!-- end courses category  -->

<!-- courses  -->
<div class="courses-container">
    <div class="courses-content">
        <p class="courses-title" data-aos="fade-right">
            ?????????????? ??????????????????
        </p>
        <div class="courses-filter">
            <button data-filter="all" class="courses-filter-item active-filter" data-aos="fade-up">????????</button>
            <button data-filter="graphic-design" class="courses-filter-item" data-aos="fade-up">???????? ????????????????</button>
            <button data-filter="photo-video-montage" class="courses-filter-item" data-aos="fade-up">?????????????? ??????????????????</button>
            <button data-filter="marketing-digitale" class="courses-filter-item" data-aos="fade-up">?????????????? ????????????????????</button>
        </div>
        <div class="courses" data-aos="fade-up">

        </div>
    </div>
    <div class="course-detail-popup-container">
        <div class="single-course-details-container">
            <img class="single-course-img" src="assets/photos/formation/Photo-Video---Sub-Thumb.png" alt="">
            <div class="course-details">
                <p class="course-details-title single-course-title"> ???????? ???????? ???????????? Adobe Photoshop ???? ?????????? ?????? ???????????????? </p>
                <p class="course-details-price single-course-price">
                    99
                    <span>??.??</span>
                </p>
            </div>
            <div style="width: 80%; height: 1px; margin: 0 auto; background-color: var(--dark-blue-); border-radius: 1px;"></div>
            <div class="single-course-details-content">
                <div class="single-course-info">
                    <div style="text-align: right; display: flex; flex-direction: column; align-items: flex-start; padding: 0 20px;  font-family: 'Cairo'; font-style: normal; font-weight: 500; font-size: 13px; color: var(--dark-blue-80);">
                        <span style="direction: ltr; margin: 20px 0;"><span class="single-course-students">+12</span> ?????????? <i class="fi fi-sr-users" style="margin: 0 1px;"></i></i></span>
                        <span style="direction: ltr; margin: 20px 0;"><span class="single-course-topics">20</span> ?????? <i class="fi fi-sr-book-open-cover"></i></span>
                    </div>
                    <div style="text-align: right; display: flex; flex-direction: column; align-items: start; padding: 0 20px;  font-family: 'Cairo'; font-style: normal; font-weight: 500; font-size: 13px; color: var(--dark-blue-80);">
                        <span style="direction: ltr; margin: 20px 0;"><span class="single-course-hours">2</span> ??????????  <i class="fi fi-sr-clock" style="margin: 0 1px;"></i></i></span>
                        <span style="direction: ltr; margin: 20px 0;">?????????? ?????????? <i class="fi fi-sr-diploma"></i></span>
                    </div>
                </div>
                <div class="single-courses-chapters">
                    <h3>?????????? ????????????:</h3>
                    <ul class="chapters-container">
                        <li>?????????? ?????? ????????????</li>
                        <li>?????????????? ???????? ???????????????? ?????????????????????? ????????????????</li>
                        <li>?????? ?????????? ???????????????? ????????????????</li>
                        <li>?????????? / ????????????</li>
                        <li>?????????? ?????????? ???????? ??????????</li>
                        <li>?????????? ???????????? ???????????? ????????????</li>
                    </ul>
                </div>
            </div>
            <div class="single-course-teacher-container">
                <div class="single-course-teacher-pic">
                  
                </div>
                <h3>
                    <span>????????????:</span>
                   <span class="single-course-teacher-name"> </span>
                </h3>
                <p class="single-course-teacher-desc">
                   
                </p>
            </div>
            <div class="single-course-footer">
                <button class="single-course-subscribe-btn">?????????? ??????????????</button>
            </div>
        </div>
    </div>
    <div class="course-subscription-popup-container">
        <div class="course-subscription-content">
            <h3>???????????????? ??????????????</h3>
            <div class="course-subscription-top-bar">
                <div class="course-subscription-top-bar-thumbnail"><img class="course-subscription-top-bar-thumbnail-img" width="100%" height="100%" src="assets/photos/formation/Photo-Video---Sub-Thumb.png" alt=""></div>
                <div class="course-subscription-top-bar-title">???????? ???????? ???????????? Adobe Photoshop ???? ?????????? ?????? ????????????????</div>
            </div>
            <form action="">
                <div class="course-subscription-form-item">
                    <label for="">??????????:</label>
                    <input type="text" id="clientName">
                </div>
                <!-- <div class="course-subscription-form-item">
                    <label for="">????????????:</label>
                    <select class="form-control">
                        <option value="0">?????????????? ????????????</option>
                        <option value="1">?????????? ?????????????? </option>
                        <option value="2">?????????? ????????????????</option>
                        <option value="3">???????? ????????????</option>
                        <option value="4">?????????????? ?????????????????? ?????????????????????? ?? ?????????? ??????????????</option>
                        <option value="5">?????????? ??????????????</option>
                    </select>
                </div> -->
                <div class="course-subscription-form-item">
                    <button type="button" class="course-subscription-btn">???????? ????????????</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of courses  -->




<!-- wlidatech section -->
<div class="wlidatech-container">
    <div class="wlidatech-log" data-aos="fade-left">
        <img src="assets/photos/wlidatech/wlidatech.png" alt="">
        <img src="assets/photos/wlidatech/WlidatTech-slider-2-1.png" alt="">
    </div>
    <div class="wlidatech-text" data-aos="fade-up">
        <img src="assets/photos/wlidatech/Wlidatech-slider-2-2.png" alt="">
        <a href="wlidatech.php">
            <button>?????????? ????????</button>
        </a>
    </div>
    <div class="wlidatech-canva" data-aos="fade-right">
    <img src="assets/photos/wlidatech/WlidatTech-slider-1-1.png" alt="">
    </div>
</div>
<!-- wlidatech section -->




<!-- video section -->
<div class="video-section-container">
    <div class="video-section-thumbnail">
        <div class="video-section-play-icon">
            <i class="fi fi-sr-play" style="transform: translateY(10%);"></i>
        </div>
        <img src="assets/photos/video-meeting-1024x640 1.png" alt="">
    </div>
    <div class="video-popup-container">
        <div class="video-popup-content">
            <video id="elmas-video" width="320" height="240" controls>
                <source src="assets/videos/ELMAS MEDIA MOTION.mp4" type="video/mp4" >
                Error Message
            </video>
        </div>
    </div>
</div>
<!-- end of video section -->


<!-- why elmas media -->
<div class="why-elmas-container">
    <div class="why-elmas-content">
        <div class="why-elmas-info" data-aos="fade-up">
            <h3>?????????? Elmas Academy ??</h3>
            <p>?????????? ???? ?????? ???????????? ???? ?????????????? ???? ???????????????????? ?????????? ????????.</p>
            <div class="elmas-numbers-container">
                <div class="elmas-numbers-item">
                    <h6>12</h6>
                    <p>??????????</p>
                </div>
                <div class="elmas-numbers-item">
                    <h6>54</h6>
                    <p>?????? ????????????</p>
                </div>
                <div class="elmas-numbers-item">
                    <h6>9.5         </h6>
                    <p>?????????? ??????????????????</p>
                </div>
            </div>
        </div>
        <div class="why-elmas-canva" data-aos="fade-up">
            <img src="assets/photos/Frame.png" alt="">
        </div>
    </div>
</div>
<!--end of why elmas media -->


<!-- student review -->
    <div class="student-reviews-container">
        <div class="student-reviews-content">
            <p class="student-reviews-title" data-aos="fade-right">
                ???????? ????????????????
            </p>
            <div class="student-reviews-slider" data-aos="fade-up">
                <div class="student-reviews-item">
                    <div class="student-reviews-img-group">
                        <div class="student-review-photo">
                            <img src="assets/photos/hero_picture/Man2 1.png" width="100%" alt="">
                        </div>
                    </div>
                    <div class="student-reviews-name-desc-star-group">
                        <p class="student-review-name">
                            ????????
                        </p>
                        <div class="student-review-stars">
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                        </div>
                        <p class="student-review-desc">
                            ???????? ?????? ?????????????? ???? ???????????? ?????? ?????????? ?????????????? ???? ???????? ??????????????????
                        </p>
                    </div>
                </div>
                <div class="student-reviews-item">
                    <div class="student-reviews-img-group">
                        <div class="student-review-photo">
                            <img src="assets/photos/hero_picture/Man2 1.png" width="100%" alt="">
                        </div>
                    </div>
                    <div class="student-reviews-name-desc-star-group">
                        <p class="student-review-name">
                            ????????
                        </p>
                        <div class="student-review-stars">
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                        </div>
                        <p class="student-review-desc">
                            ???????? ?????? ?????????????? ???? ???????????? ?????? ?????????? ?????????????? ???? ???????? ??????????????????
                        </p>
                    </div>
                </div>
                <div class="student-reviews-item">
                    <div class="student-reviews-img-group">
                        <div class="student-review-photo">
                            <img src="assets/photos/hero_picture/Man2 1.png" width="100%" alt="">
                        </div>
                    </div>
                    <div class="student-reviews-name-desc-star-group">
                        <p class="student-review-name">
                            ????????
                        </p>
                        <div class="student-review-stars">
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                            <i class="fi fi-ss-star" style="color: var(--yellow-);"></i>
                        </div>
                        <p class="student-review-desc">
                            ???????? ?????? ?????????????? ???? ???????????? ?????? ?????????? ?????????????? ???? ???????? ??????????????????
                        </p>
                    </div>
                </div>
            </div>
            <button class="prev-button-review"><i class="fi fi-sr-angle-right"></i></button>
            <button class="next-button-review"><i class="fi fi-sr-angle-right"></i></button>
        </div>
    </div>
<!-- end of student review -->


<!-- contact banner -->
<div class="contact-banner-container">
    <div class="contact-item">
        <div>
            <i class="fi fi-sr-comment-alt"></i>
        </div>
        <div>
            <p class="contact-banne-value" data-aos="fade-right">+212 6 63 20 00 90</p>
            <p class="contact-banne-tool" data-aos="fade-right">?????????? ?????? ???????????? ????</p>
        </div>
    </div>
    <div class="contact-item">
        <div>
            <i class="fi fi-sr-envelope"></i>
        </div>
        <div>
            <p class="contact-banne-value" data-aos="fade-right">elmasacademy@gmail.com</p>
            <p class="contact-banne-tool" data-aos="fade-right">?????????? ?????? ???????????? ????????????????????</p>
        </div>
    </div>
    <div class="contact-item">
        <div>
            <i class="fi fi-sr-phone-call"></i>
        </div>
        <div>
            <p class="contact-banne-value" data-aos="fade-right">+212 5 30 14 78 31</p>
            <p class="contact-banne-tool" data-aos="fade-right">?????????? ?????? ????????????</p>
        </div>
    </div>
</div>
<!-- end of contact banner -->




<!--  navbar -->
<?php 
    include('partial/footer.php');
?>
<!-- end of navbar -->

<!-- slick js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="slick-1.8.1/slick/slick.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- js -->
<script src="js/script.js"></script>
<script src="js/courses.js"></script>
</body>
</html>