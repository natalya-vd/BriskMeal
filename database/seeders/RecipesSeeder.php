<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert($this->getData());
    }

    private function getData()
    {
        $data = [
            [
                "name" => "Parmesan-Crusted Chicken",
                "cook_time" => 30,
                "recipe_text"=> "rvd",
                "description" => "This Parmesan chicken is juicy, crispy, cheesy—and keto! Here, the traditional breaded chicken cutlet gets a flavorful makeover with a sprinkle of rosemary, basil, and sage, plus lemon aïoli and a coating of golden Parmesan (instead of the usual breadcrumbs). Two fresh sides bring it all together: sautéed green beans with toasted hazelnuts and herby marinated Roma tomatoes. "
            ],
            [
                "name" => "Blackened Shrimp & 'Grits'",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "The classic Southern combo of shrimp and grits gets a gluten-free, keto-friendly reimagining in this 25-minute dish. Here, cauliflower “grits,” made with cream cheese and melty sharp cheddar cheese, fill in for the traditional cornmeal base. They’re topped with tender blackened shrimp pan-seared with green bell pepper for added texture and flavor. A lemon-chive vinaigrette drizzled over the top adds a bright and tangy finish."
            ],
            [
                "name" => "Southwest Pork Patties",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Harnessing the power of the Maillard reaction (aka the scientific process responsible for creating delicious browning in the pan), we sear tonight’s keto-friendly pork patties in a sizzling-hot skillet. The result is juicy patties fragrant with Southwestern-style chili spices and sealed with a deeply flavorful crust. Served over a butternut squash hash with kale and cabbage, the patties are drizzled with a cilantro vinaigrette for bold, herby brightness."
            ],
            [
                "name" => "Creamy Ancho Turkey Soup",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Our ancho-cumin spice blend adds a swirl of earthy, smoky warmth to this creamy, veggie-loaded turkey soup. It’s brimming with ground turkey, cabbage ribbons, and sweet roasted red peppers, all simmered in a creamy mushroom broth for earthy richness. Each steaming keto-friendly bowl can be customized with a cornucopia of toppings: fresh tomato, salty cotija, toasted pepitas, and fragrant cilantro."
            ],
            [
                "name" => "Cheesy Artichoke Beef Patties",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Who among us hasn’t wondered, “Can I just eat cheesy artichoke dip for dinner?” Here—in this keto-friendly meal—you’ll do just that. Beef patties are seasoned with an Italian herb and red pepper blend, pan seared, then topped with a pillowy ricotta, nutty Parmesan, and artichoke blend. Next, they’re broiled until the meat is juicy and the topping is melty. They’re served over cauliflower 'rice' with kale and topped with a sunflower basil sauce for a pop of herby freshness. Moral of the story: You can eat artichoke dip for dinner!"
            ],
            [
                "name" => "Pork with Creamy Caper Sauce",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "The sunny colors and flavors in tonight’s pork chops set this keto-friendly dish apart. The chops are seasoned with a lemon pepper and herb blend, seared, then drizzled with a creamy lemon-basil caper sauce. Crunchy pistachios are sprinkled over the top, and on the side, there’s a kale salad with chewy dates and sweet carrots, plus a healthy helping of sautéed squash and tomato. "
            ],
            [
                "name" => "Herb-Roasted Chicken with Bacon",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "This keto-friendly meal is filled with comforting flavors, starting with the main course: roasted chicken seasoned with a blend of rosemary, basil, and sage. The sides only add to that same texture-filled, cozy vibe. There’s mashed cauliflower “rice” with cream cheese and white cheddar (a flavorful cousin of cheesy mashed potatoes!), plus, Brussels sprouts and onion sautéed in bacon fat for extra richness, and garnished with bacon and pecans."
            ],
            [
                "name" => "Lemony Sockeye Salmon & Succotash",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "On tonight’s plates, you’ll find wild-caught sockeye salmon seared with herbs, then roasted with lemon rounds for citrusy flavor. On the side, green beans, corn, tomato, and a bit of lemon zest blend into a colorful succotash, while herb-roasted potatoes add savory balance. And since it wouldn’t be a bright meal without lemon butter, this sunshiny sauce tops the salmon for a sweet and delicate finish."
            ],
            [
                "name" => "Blackened Tilapia",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Tonight’s Creole-inspired seafood dish is loaded with bold flavors—and it’s ready for the dinner table in just 30 minutes! Here, blackening spices impart peppery depth to delicate, pan-seared tilapia fillets. The flaky fish is drizzled in a bright and creamy chipotle aïoli and served alongside roasted sweet potatoes, cabbage, and pepitas. Guacamole adds richness and freshness to every bite. "
            ],
            [
                "name" => "White Bean Chicken Chili",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "This thick, rich white bean and chicken chili satisfies all on its own, but it’s lifted to new heights with a bevy of delicious add-ons, from an herby crema and sharp cheddar cheese to Roma tomato, zesty scallion greens, and a drizzle of Cholula sauce for a bit of heat. Just sauté chicken strips (seasoned with an ancho-cumin blend) along with corn and scallion until tender, simmer it down with cannellini beans in a cream cheese–laced chicken stock, then garnish to your heart’s desire."
            ],
            [
                "name" => "Middle Eastern-Style Beef Bowls",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Earthy cumin, savory-sweet roasted red peppers, and piquant feta cheese are all Middle Eastern staples—and tonight they add layers of flavor to loaded beef and veggie bowls. Dusted in a spicy cumin-allspice blend, ground beef is pan-seared with zucchini and roasted peppers, then sprinkled with feta. It’s all piled over almond-studded rice pilaf and finished with creamy cardamom-spiced yogurt. Kick up the heat with a final drizzle of Cholula sauce."
            ],
            [
                "name" => "Gyro-Spiced Pork Tenderloin Kale Salad",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "This hearty salad is brimming with delicious flavors, starting with tender, gyro-spiced pork tenderloin. That tops a tangy mix of kale, fresh Roma tomato, chewy sweet dates, and salty feta cheese for a tantalizing variety of textures. A drizzle of sour cream with lemon and dill adds creamy notes, while garlicky whole-wheat pita croutons add sparks of toasty crunch throughout."
            ],
            [
                "name" => "Apricot-Glazed Salmon",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "One of our favorite ways to add an extra layer of flavor to seafood dishes is with a simple glaze. For this delectable dish, we’ve brushed sweet, tart apricot jam onto seared salmon fillets before roasting them to a flaky finish. Cardamom-spiced Greek yogurt is drizzled over the top for creamy, tangy notes. Roasted butternut squash and cabbage, plus toasted pearl couscous strewn with apricots and pistachios, round out the colorful meal."
            ],
            [
                "name" => "Cranberry BBQ Turkey Burgers",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Sweet meets tangy for the cranberry BBQ sauce on tonight’s ancho-spiced turkey burgers. These saucy patties are nestled into toasted brioche buns and served with roasted potato wedges and a fresh, creamy chimichurri slaw (think cabbage, carrots, parsley, and cilantro). Can’t get enough of that zingy BBQ sauce? Use your potato wedges to swipe up any extra deliciousness."
            ],
            [
                "name" => "Southwest Tomato & Black Bean Soup",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "This satisfyingly creamy vegan soup delivers flavor-packed comfort no matter the weather. Southwest flavors like paprika, cumin, and lime run through the luxurious broth. For texture and contrast, you’ll find diced green bell pepper in the soup, and salsa dolloped on top of each bowl."
            ],
            [
                "name" => "Kidney Bean 'Meatballs'",
                "cook_time" => 45,
                "recipe_text" => "rvd",
                "description" => "Superfood chia seeds help hold these crispy vegan 'meatballs' together. Here, the seeds slip under the radar once mixed with mashed kidney beans, breadcrumbs, and a paprika-parsley blend. The entire mixture is rolled into balls, roasted to toasty perfection, then served over jasmine rice. Our creamy paprika-Dijon aïoli and a tangy corn and red pepper relish top it all off."
            ],
            [
                "name" => "Herbed Chicken & Creamy Spaghetti",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "Tonight’s dish will make you feel like you’re dining under the sun with a slew of bright flavors. A luscious sun-dried tomato sauce, made with coconut milk, coats long strands of spaghetti squash. For even more veg, there’s chopped chard that’s cooked into the sauce as well as tossed with the spaghetti squash. Chicken cutlets, seared with oregano-garlic seasoning, top the vegetables, along with roasted almonds and red pepper flakes."
            ],
            [
                "name" => "Creamy Pesto Farfalle Bowls",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Creamy sauces are an ideal match for farfalle (“butterflies” in Italian) because of the way they cling to the folds of the wing-shaped pasta. In tonight’s Italian-inspired dish, we’ve created a rich, herbaceous sauce for whole-wheat farfalle by stirring cream cheese into our basil and Parmesan pesto. Roasted butternut squash, juicy grape tomatoes, and earthy-sweet peas are added at the end before everything is topped with mozzarella and baked to a delightfully melty finish."
            ],
            [
                "name" => "Mushroom, Artichoke & Pesto Flatbreads",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Tonight’s plant-based flatbreads pack a punch of Italian-inspired flavors. In this 30-minute meal, the flatbreads are slathered with basil pesto and sprinkled with cheesy, nutty nutritional yeast. Cremini mushrooms, slices of fresh tomato, briny artichokes, and roasted red peppers are piled on top before the flatbreads are baked to a crispy finish. A kale salad with dried apricots, almonds, and balsamic vinaigrette makes for a refreshing contrast."
            ],
            [
                "name" => "Parmesan-Crusted Chicken",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "This Parmesan chicken is juicy, crispy, cheesy—and keto! Here, the traditional breaded chicken cutlet gets a flavorful makeover with a sprinkle of rosemary, basil, and sage, plus lemon aïoli and a coating of golden Parmesan (instead of the usual breadcrumbs). Two fresh sides bring it all together: sautéed green beans with toasted hazelnuts and herby marinated Roma tomatoes."
            ],
            [
                "name" => "Blackened Shrimp & 'Grits'",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "The classic Southern combo of shrimp and grits gets a gluten-free, keto-friendly reimagining in this 25-minute dish. Here, cauliflower “grits,” made with cream cheese and melty sharp cheddar cheese, fill in for the traditional cornmeal base. They’re topped with tender blackened shrimp pan-seared with green bell pepper for added texture and flavor. A lemon-chive vinaigrette drizzled over the top adds a bright and tangy finish."
            ],
            [
                "name" => "Herb-Roasted Chicken with Bacon",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "This keto-friendly meal is filled with comforting flavors, starting with the main course: roasted chicken seasoned with a blend of rosemary, basil, and sage. The sides only add to that same texture-filled, cozy vibe. There’s mashed cauliflower “rice” with cream cheese and white cheddar (a flavorful cousin of cheesy mashed potatoes!), plus, Brussels sprouts and onion sautéed in bacon fat for extra richness, and garnished with bacon and pecans."
            ],
            [
                "name" => "Mediterranean Chicken",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "Briny marinated artichoke hearts and sweet roasted red peppers, two hallmark ingredients of Mediterranean-style cuisine, star in this dinner. Chicken cutlets are pan-seared, then nestled into the veggies and finished in the oven until tender and juicy. A side of roasted Brussels sprouts topped with creamy feta completes the satisfying meal."
            ],
            [
                "name" => "Shrimp Scampi",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "This dish has all the creamy delightfulness of shrimp scampi—minus the carbs! Here, our favorite noodle replacement, tender roasted spaghetti squash, is sautéed with butter and Parmesan cheese. It serves as a rich base for lemony, garlicky shrimp, pan-seared to perfection. Toasted hazelnuts and a drizzle of basil pesto finish the meal with a satisfying crunch and herby flavors. "
            ],
            [
                "name" => "Smoky Pork Patties",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Classic Spanish chorizo gets its distinctive taste from smoked, dried chiles. Inspired by that flavor profile, our chefs added a dash of Spanish-style seasoning (think smoked paprika, cumin, and crushed red pepper flakes) to these juicy pork patties, giving them depth. Luscious caramelized onion offers a touch of sweetness on top. Seasoned roasted cauliflower brings harmony to the plate."
            ]
        ];
        $count = 175;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                "name" => fake()->text(38),
                "cook_time" => rand(20, 90),
                "description" => fake()->text(rand(700, 1700)),
                "recipe_text" => fake()->text(rand(2000, 10000)),
            ];
        }

        return $data;
    }
}
