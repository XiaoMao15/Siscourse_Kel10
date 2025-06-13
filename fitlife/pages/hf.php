<main>
    <section class="container py-5 healthy-food">
        <div class="hf text-center mb-5 py-3">
            <h1 class="display-4 mb-3">Explore Healthy Food Options</h1>
            <p class="lead">Healthy eating is key to maintaining a strong body and mind. Below are some delicious and nutritious options to inspire your next meal.</p>
        </div>

        <!-- Healthy Food for Weight Loss -->
        <div id="dietFood" class="diet">
            <h3 class="text-left mb-4">HEALTHY FOOD FOR WEIGHT LOSS</h3>
            <hr class="mx-auto py-2" >

            <div class="mb-5">
                <?php
                $weight_loss_foods = [
                    [
                        "img" => "img/bulking (1).jpg",
                        "title" => "Grilled Chicken Salad",
                        "desc" => "Grilled chicken salad is generally high in protein, which helps keep you fuller for longer and builds muscle. In addition, the vegetables in the salad provide vitamins, minerals, and fiber that are essential for health."
                    ],
                    [
                        "img" => "img/egg.jpg",
                        "title" => "Boiled Egg",
                        "desc" => "Hard-boiled eggs are rich in high-quality protein, vitamins and minerals such as vitamin B12, vitamin D, selenium and choline. The protein content helps you feel fuller for longer, thus helping in weight control."
                    ],
                    [
                        "img" => "img/oatmeal.jpg",
                        "title" => "Oatmeal",
                        "desc" => "Oatmeal is an excellent choice for dieting because of the nutritional content and health benefits it offers. Oatmeal is made from whole grains that are rich in fiber, vitamins, minerals, and antioxidants."
                    ]
                ];

                foreach ($weight_loss_foods as $food) {
                    echo '
                    <div class="food d-flex align-items-start mb-4">
                        <img src="' . $food["img"] . '" alt="' . $food["title"] . '" class="rounded shadow" style="width: 15em;">
                        <div class="food-desc ps-4">
                            <h5 class="fw-3">' . $food["title"] . '</h5>
                            <p class="text-muted">' . $food["desc"] . '</p>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>

        <!-- Healthy Food for Weight Gain -->
        <div id="weightFood" class="diet py-3">
            <h3 class="text-left mb-4">HEALTHY FOOD FOR WEIGHT GAIN</h3>
            <hr class="mx-auto py-2">

            <div>
                <?php
                $weight_gain_foods = [
                    [
                        "img" => "img/pasta.jpg",
                        "title" => "Pasta",
                        "desc" => "Pasta can be an excellent choice for weight gain due to its high carbohydrate content, which helps add calories to your diet."
                    ],
                    [
                        "img" => "img/steak.jpg",
                        "title" => "Steak",
                        "desc" => "Steak is an excellent food choice for weight gain, especially if you're focused on building muscle."
                    ],
                    [
                        "img" => "img/avocado.jpg",
                        "title" => "Avocado",
                        "desc" => "Avocados are an excellent food choice for weight gain as they are rich in calories, healthy fats, and other essential nutrients."
                    ]
                ];

                foreach ($weight_gain_foods as $food) {
                    echo '
                    <div class="food d-flex align-items-start mb-4">
                        <img src="' . $food["img"] . '" alt="' . $food["title"] . '" class="rounded shadow" style="width: 15em;">
                        <div class="food-desc ps-4">
                            <h5 class="fw-3">' . $food["title"] . '</h5>
                            <p class="text-muted">' . $food["desc"] . '</p>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
</main>
