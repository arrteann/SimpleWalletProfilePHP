<?php

include 'config/DB.php';
$DB = new DB();
$userInformation = $DB->getUserinformation(1);
$userAmount = $DB->getAmount($userInformation['id']);
$product = $DB->getProduct(1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT</title>

    <!-- TAILWIND -->
    <link rel="stylesheet" href="/style/tailwind.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="bg-gradient">
        <div class="container mx-auto">
            <header class="header justify-between">
                <div class="header--title flex items-center">
                    <svg class="w-8 h-6 ">
                        <path fill="#323232" d="M4.423,9.141H3.565c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.192,0.429-0.429S4.66,9.141,4.423,9.141 M6.997,16.861H6.139c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.191,0.429-0.429S7.234,16.861,6.997,16.861 M4.423,16.861H3.565c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.191,0.429-0.429S4.66,16.861,4.423,16.861M13.861,9.998h0.857c0.236,0,0.429-0.192,0.429-0.429s-0.192-0.429-0.429-0.429h-0.857c-0.237,0-0.43,0.192-0.43,0.429S13.624,9.998,13.861,9.998 M14.719,16.861h-0.857c-0.237,0-0.43,0.192-0.43,0.43s0.192,0.429,0.43,0.429h0.857c0.236,0,0.429-0.191,0.429-0.429S14.955,16.861,14.719,16.861 M15.576,13.001c-0.236,0-0.429,0.192-0.429,0.43c0,0.236,0.192,0.429,0.429,0.429c0.237,0,0.43-0.192,0.43-0.429C16.006,13.193,15.813,13.001,15.576,13.001 M6.997,9.141H6.139c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.192,0.429-0.429S7.234,9.141,6.997,9.141M12.145,9.141h-0.857c-0.236,0-0.429,0.192-0.429,0.429s0.193,0.429,0.429,0.429h0.857c0.237,0,0.43-0.192,0.43-0.429S12.382,9.141,12.145,9.141 M17.722,10.856V7.424c0-0.948-0.769-1.716-1.716-1.716h-0.617l-1.038-3.873c-0.245-0.916-1.186-1.458-2.101-1.213L3.592,2.912C2.676,3.157,2.133,4.098,2.378,5.014l0.186,0.695H2.278c-0.947,0-1.716,0.768-1.716,1.716V17.72c0,0.947,0.769,1.716,1.716,1.716h13.728c0.947,0,1.716-0.769,1.716-1.716v-1.716c0.947,0,1.716-0.769,1.716-1.716v-1.716C19.438,11.624,18.669,10.856,17.722,10.856 M16.006,6.566c0.473,0,0.857,0.384,0.857,0.858v0.238c-0.253-0.146-0.544-0.238-0.857-0.238h-0.157l-0.229-0.858H16.006z M14.41,5.372l0.55,2.053H6.67L14.41,5.372z M3.814,3.741l8.657-2.29c0.458-0.123,0.928,0.149,1.051,0.607l0.222,0.828L3.43,5.621l-0.223-0.83C3.084,4.333,3.356,3.863,3.814,3.741M1.42,7.424c0-0.474,0.384-0.858,0.858-0.858h0.517l0.229,0.858H2.278c-0.314,0-0.605,0.091-0.858,0.238V7.424z M16.863,17.72c0,0.474-0.385,0.858-0.857,0.858H2.278c-0.474,0-0.858-0.385-0.858-0.858V9.141c0-0.474,0.384-0.858,0.858-0.858h13.728c0.473,0,0.857,0.384,0.857,0.858v1.715h-1.716c-0.947,0-1.716,0.768-1.716,1.716v1.716c0,0.947,0.769,1.716,1.716,1.716h1.716V17.72z M18.58,14.288c0,0.474-0.385,0.857-0.858,0.857h-2.574c-0.474,0-0.857-0.384-0.857-0.857v-1.716c0-0.474,0.384-0.858,0.857-0.858h2.574c0.474,0,0.858,0.385,0.858,0.858V14.288z M9.571,16.861H8.713c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.236,0,0.429-0.191,0.429-0.429S9.808,16.861,9.571,16.861M12.145,16.861h-0.857c-0.236,0-0.429,0.192-0.429,0.43s0.193,0.429,0.429,0.429h0.857c0.237,0,0.43-0.191,0.43-0.429S12.382,16.861,12.145,16.861 M9.571,9.141H8.713c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858C9.808,9.998,10,9.806,10,9.569S9.808,9.141,9.571,9.141"></path>
                    </svg>
                    <h1 class="font-bold tracking-wider text-xl">DASHBOARD</h1>
                </div>
                <div class="header--title flex items-center">
                    <h1 id="amount" class="font-bold tracking-wider text-xl mr-2"><?php echo $userAmount['amount'] ?></h1>
                    <svg class="w-8 h-6 ">
                        <path fill="#323232" d="M4.423,9.141H3.565c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.192,0.429-0.429S4.66,9.141,4.423,9.141 M6.997,16.861H6.139c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.191,0.429-0.429S7.234,16.861,6.997,16.861 M4.423,16.861H3.565c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.191,0.429-0.429S4.66,16.861,4.423,16.861M13.861,9.998h0.857c0.236,0,0.429-0.192,0.429-0.429s-0.192-0.429-0.429-0.429h-0.857c-0.237,0-0.43,0.192-0.43,0.429S13.624,9.998,13.861,9.998 M14.719,16.861h-0.857c-0.237,0-0.43,0.192-0.43,0.43s0.192,0.429,0.43,0.429h0.857c0.236,0,0.429-0.191,0.429-0.429S14.955,16.861,14.719,16.861 M15.576,13.001c-0.236,0-0.429,0.192-0.429,0.43c0,0.236,0.192,0.429,0.429,0.429c0.237,0,0.43-0.192,0.43-0.429C16.006,13.193,15.813,13.001,15.576,13.001 M6.997,9.141H6.139c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.192,0.429-0.429S7.234,9.141,6.997,9.141M12.145,9.141h-0.857c-0.236,0-0.429,0.192-0.429,0.429s0.193,0.429,0.429,0.429h0.857c0.237,0,0.43-0.192,0.43-0.429S12.382,9.141,12.145,9.141 M17.722,10.856V7.424c0-0.948-0.769-1.716-1.716-1.716h-0.617l-1.038-3.873c-0.245-0.916-1.186-1.458-2.101-1.213L3.592,2.912C2.676,3.157,2.133,4.098,2.378,5.014l0.186,0.695H2.278c-0.947,0-1.716,0.768-1.716,1.716V17.72c0,0.947,0.769,1.716,1.716,1.716h13.728c0.947,0,1.716-0.769,1.716-1.716v-1.716c0.947,0,1.716-0.769,1.716-1.716v-1.716C19.438,11.624,18.669,10.856,17.722,10.856 M16.006,6.566c0.473,0,0.857,0.384,0.857,0.858v0.238c-0.253-0.146-0.544-0.238-0.857-0.238h-0.157l-0.229-0.858H16.006z M14.41,5.372l0.55,2.053H6.67L14.41,5.372z M3.814,3.741l8.657-2.29c0.458-0.123,0.928,0.149,1.051,0.607l0.222,0.828L3.43,5.621l-0.223-0.83C3.084,4.333,3.356,3.863,3.814,3.741M1.42,7.424c0-0.474,0.384-0.858,0.858-0.858h0.517l0.229,0.858H2.278c-0.314,0-0.605,0.091-0.858,0.238V7.424z M16.863,17.72c0,0.474-0.385,0.858-0.857,0.858H2.278c-0.474,0-0.858-0.385-0.858-0.858V9.141c0-0.474,0.384-0.858,0.858-0.858h13.728c0.473,0,0.857,0.384,0.857,0.858v1.715h-1.716c-0.947,0-1.716,0.768-1.716,1.716v1.716c0,0.947,0.769,1.716,1.716,1.716h1.716V17.72z M18.58,14.288c0,0.474-0.385,0.857-0.858,0.857h-2.574c-0.474,0-0.857-0.384-0.857-0.857v-1.716c0-0.474,0.384-0.858,0.857-0.858h2.574c0.474,0,0.858,0.385,0.858,0.858V14.288z M9.571,16.861H8.713c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.236,0,0.429-0.191,0.429-0.429S9.808,16.861,9.571,16.861M12.145,16.861h-0.857c-0.236,0-0.429,0.192-0.429,0.43s0.193,0.429,0.429,0.429h0.857c0.237,0,0.43-0.191,0.43-0.429S12.382,16.861,12.145,16.861 M9.571,9.141H8.713c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858C9.808,9.998,10,9.806,10,9.569S9.808,9.141,9.571,9.141"></path>
                    </svg>
                </div>
            </header>

            <main class="w-1/4 bg-white mx-auto rounded-lg shadow-lg">
                <div class="w-full">
                    <img src="<?php echo $product['img'] ?>" alt="Macbook" class="rounded-lg rounded-b-none mb-2">
                    <h1 class="uppercase text-center text-2xl px-6 py-2 text-gray-700"><?php echo $product['title'] ?></h1>
                    <p class="px-4 mx-2 text-sm text-justify mb-6"><?php echo $product['description'] ?></p>
                    <div class="mb-4 py-2 text-center">
                        <button class="mb-4 rounded-md shadow-lg bg-purple-800 py-3 px-8 text-white"><?php echo $product['price'] ?> $</button>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const button = document.querySelector("button");

        button.addEventListener('click', async e => {
            e.preventDefault();
            await fetch('buy.php', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        'price': <?php echo $product['price'] ?>,
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status == "Success") {
                        document.querySelector("#amount").textContent = data.amount;
                    }
                })
        });
    </script>
</body>

</html>