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
        return [
            [   "name" => "Parmesan-Crusted Chicken",
                "cook_time" => 30,
                "recipe_text"=> "marinated tomatoes, green beans with hazelnuts",
                "description" => "This Parmesan chicken is juicy, crispy, cheesy—and keto! Here, the traditional breaded chicken cutlet gets a flavorful makeover with a sprinkle of rosemary, basil, and sage, plus lemon aïoli and a coating of golden Parmesan (instead of the usual breadcrumbs). Two fresh sides bring it all together: sautéed green beans with toasted hazelnuts and herby marinated Roma tomatoes. "
            ],
            [   "name" => "Blackened Shrimp & 'Grits'",
                "cook_time" => 25,
                "recipe_text" => "bell pepper, lemon-chive vinaigrette",
                "description" => "The classic Southern combo of shrimp and grits gets a gluten-free, keto-friendly reimagining in this 25-minute dish. Here, cauliflower “grits,” made with cream cheese and melty sharp cheddar cheese, fill in for the traditional cornmeal base. They’re topped with tender blackened shrimp pan-seared with green bell pepper for added texture and flavor. A lemon-chive vinaigrette drizzled over the top adds a bright and tangy finish."
            ],
            [   "name" => "Southwest Pork Patties",
                "cook_time" => 30,
                "recipe_text" => "butternut squash hash with kale, cabbage, tomato & pepitas",
                "description" => "Harnessing the power of the Maillard reaction (aka the scientific process responsible for creating delicious browning in the pan), we sear tonight’s keto-friendly pork patties in a sizzling-hot skillet. The result is juicy patties fragrant with Southwestern-style chili spices and sealed with a deeply flavorful crust. Served over a butternut squash hash with kale and cabbage, the patties are drizzled with a cilantro vinaigrette for bold, herby brightness."
            ],
            [   "name" => "Creamy Ancho Turkey Soup",
                "cook_time" => 25,
                "recipe_text" => "cabbage, roasted red peppers, tomato, cotija, pepitas",
                "description" => "Our ancho-cumin spice blend adds a swirl of earthy, smoky warmth to this creamy, veggie-loaded turkey soup. It’s brimming with ground turkey, cabbage ribbons, and sweet roasted red peppers, all simmered in a creamy mushroom broth for earthy richness. Each steaming keto-friendly bowl can be customized with a cornucopia of toppings: fresh tomato, salty cotija, toasted pepitas, and fragrant cilantro."
            ],
            [   "name" => "Cheesy Artichoke Beef Patties",
                "cook_time" => 25,
                "recipe_text" => "ricotta, cauliflower “rice” with kale, sunflower basil sauce",
                "description" => "Who among us hasn’t wondered, “Can I just eat cheesy artichoke dip for dinner?” Here—in this keto-friendly meal—you’ll do just that. Beef patties are seasoned with an Italian herb and red pepper blend, pan seared, then topped with a pillowy ricotta, nutty Parmesan, and artichoke blend. Next, they’re broiled until the meat is juicy and the topping is melty. They’re served over cauliflower 'rice' with kale and topped with a sunflower basil sauce for a pop of herby freshness. Moral of the story: You can eat artichoke dip for dinner!"
            ],
            [   "name" => "Pork with Creamy Caper Sauce",
                "cook_time" => 25,
                "recipe_text" => "kale salad, sautéed squash & tomato, toasted pistachios",
                "description" => "The sunny colors and flavors in tonight’s pork chops set this keto-friendly dish apart. The chops are seasoned with a lemon pepper and herb blend, seared, then drizzled with a creamy lemon-basil caper sauce. Crunchy pistachios are sprinkled over the top, and on the side, there’s a kale salad with chewy dates and sweet carrots, plus a healthy helping of sautéed squash and tomato. "
            ],
            [   "name" => "Herb-Roasted Chicken with Bacon",
                "cook_time" => 35,
                "recipe_text" => "cheesy mashed cauliflower, Brussels sprouts, pecans",
                "description" => "This keto-friendly meal is filled with comforting flavors, starting with the main course: roasted chicken seasoned with a blend of rosemary, basil, and sage. The sides only add to that same texture-filled, cozy vibe. There’s mashed cauliflower “rice” with cream cheese and white cheddar (a flavorful cousin of cheesy mashed potatoes!), plus, Brussels sprouts and onion sautéed in bacon fat for extra richness, and garnished with bacon and pecans."
            ],
            [   "name" => "Lemony Sockeye Salmon & Succotash",
                "cook_time" => 35,
                "recipe_text" => "herb-roasted potatoes, corn, green beans, tomato",
                "description" => "On tonight’s plates, you’ll find wild-caught sockeye salmon seared with herbs, then roasted with lemon rounds for citrusy flavor. On the side, green beans, corn, tomato, and a bit of lemon zest blend into a colorful succotash, while herb-roasted potatoes add savory balance. And since it wouldn’t be a bright meal without lemon butter, this sunshiny sauce tops the salmon for a sweet and delicate finish."
            ],
            [   "name" => "Blackened Tilapia",
                "cook_time" => 30,
                "recipe_text" => "chipotle aïoli, roasted veggies & pepitas, guacamole",
                "description" => "Tonight’s Creole-inspired seafood dish is loaded with bold flavors—and it’s ready for the dinner table in just 30 minutes! Here, blackening spices impart peppery depth to delicate, pan-seared tilapia fillets. The flaky fish is drizzled in a bright and creamy chipotle aïoli and served alongside roasted sweet potatoes, cabbage, and pepitas. Guacamole adds richness and freshness to every bite. "
            ],
            [   "name" => "White Bean Chicken Chili",
                "cook_time" => 25,
                "recipe_text" => "corn, tomato, herby crema, cheddar, Cholula sauce",
                "description" => "This thick, rich white bean and chicken chili satisfies all on its own, but it’s lifted to new heights with a bevy of delicious add-ons, from an herby crema and sharp cheddar cheese to Roma tomato, zesty scallion greens, and a drizzle of Cholula sauce for a bit of heat. Just sauté chicken strips (seasoned with an ancho-cumin blend) along with corn and scallion until tender, simmer it down with cannellini beans in a cream cheese–laced chicken stock, then garnish to your heart’s desire."
            ],
            /*   10    */
            [   "name" => "Middle Eastern-Style Beef Bowls",
                "cook_time" => 25,
                "recipe_text" => "rice pilaf, zucchini, red peppers, feta, spiced yogurt, Cholula",
                "description" => "Earthy cumin, savory-sweet roasted red peppers, and piquant feta cheese are all Middle Eastern staples—and tonight they add layers of flavor to loaded beef and veggie bowls. Dusted in a spicy cumin-allspice blend, ground beef is pan-seared with zucchini and roasted peppers, then sprinkled with feta. It’s all piled over almond-studded rice pilaf and finished with creamy cardamom-spiced yogurt. Kick up the heat with a final drizzle of Cholula sauce."
            ],
            [   "name" => "Gyro-Spiced Pork Tenderloin Kale Salad",
                "cook_time" => 30,
                "recipe_text" => "garlicky croutons, tomato, feta, white balsamic vinaigrette",
                "description" => "This hearty salad is brimming with delicious flavors, starting with tender, gyro-spiced pork tenderloin. That tops a tangy mix of kale, fresh Roma tomato, chewy sweet dates, and salty feta cheese for a tantalizing variety of textures. A drizzle of sour cream with lemon and dill adds creamy notes, while garlicky whole-wheat pita croutons add sparks of toasty crunch throughout."
            ],
            [   "name" => "Apricot-Glazed Salmon",
                "cook_time" => 35,
                "recipe_text" => "butternut squash & cabbage, pearl couscous, spiced yogurt",
                "description" => "One of our favorite ways to add an extra layer of flavor to seafood dishes is with a simple glaze. For this delectable dish, we’ve brushed sweet, tart apricot jam onto seared salmon fillets before roasting them to a flaky finish. Cardamom-spiced Greek yogurt is drizzled over the top for creamy, tangy notes. Roasted butternut squash and cabbage, plus toasted pearl couscous strewn with apricots and pistachios, round out the colorful meal."
            ],
            [   "name" => "Cranberry BBQ Turkey Burgers",
                "cook_time" => 30,
                "recipe_text" => "roasted potato wedges, creamy herbed slaw",
                "description" => "Sweet meets tangy for the cranberry BBQ sauce on tonight’s ancho-spiced turkey burgers. These saucy patties are nestled into toasted brioche buns and served with roasted potato wedges and a fresh, creamy chimichurri slaw (think cabbage, carrots, parsley, and cilantro). Can’t get enough of that zingy BBQ sauce? Use your potato wedges to swipe up any extra deliciousness."
            ],
            [   "name" => "Southwest Tomato & Black Bean Soup",
                "cook_time" => 30,
                "recipe_text" => "bell pepper, coconut milk, tomato salsa, Cholula",
                "description" => "This satisfyingly creamy vegan soup delivers flavor-packed comfort no matter the weather. Southwest flavors like paprika, cumin, and lime run through the luxurious broth. For texture and contrast, you’ll find diced green bell pepper in the soup, and salsa dolloped on top of each bowl."
            ],
            [   "name" => "Kidney Bean 'Meatballs'",
                "cook_time" => 45,
                "recipe_text" => "rice, paprika-Dijon aϊoli, corn & red pepper relish, broccoli",
                "description" => "Superfood chia seeds help hold these crispy vegan 'meatballs' together. Here, the seeds slip under the radar once mixed with mashed kidney beans, breadcrumbs, and a paprika-parsley blend. The entire mixture is rolled into balls, roasted to toasty perfection, then served over jasmine rice. Our creamy paprika-Dijon aïoli and a tangy corn and red pepper relish top it all off."
            ],
            [   "name" => "Herbed Chicken & Creamy Spaghetti",
                "cook_time" => 35,
                "recipe_text" => "sun-dried tomatoes, coconut, chard, almonds",
                "description" => "Tonight’s dish will make you feel like you’re dining under the sun with a slew of bright flavors. A luscious sun-dried tomato sauce, made with coconut milk, coats long strands of spaghetti squash. For even more veg, there’s chopped chard that’s cooked into the sauce as well as tossed with the spaghetti squash. Chicken cutlets, seared with oregano-garlic seasoning, top the vegetables, along with roasted almonds and red pepper flakes."
            ],
            [   "name" => "Creamy Pesto Farfalle Bowls",
                "cook_time" => 30,
                "recipe_text" => "tomatoes, peas, roasted butternut squash, mozzarella",
                "description" => "Creamy sauces are an ideal match for farfalle (“butterflies” in Italian) because of the way they cling to the folds of the wing-shaped pasta. In tonight’s Italian-inspired dish, we’ve created a rich, herbaceous sauce for whole-wheat farfalle by stirring cream cheese into our basil and Parmesan pesto. Roasted butternut squash, juicy grape tomatoes, and earthy-sweet peas are added at the end before everything is topped with mozzarella and baked to a delightfully melty finish."
            ],
            [   "name" => "Mushroom, Artichoke & Pesto Flatbreads",
                "cook_time" => 30,
                "recipe_text" => "kale salad with dried apricots & roasted almonds",
                "description" => "Tonight’s plant-based flatbreads pack a punch of Italian-inspired flavors. In this 30-minute meal, the flatbreads are slathered with basil pesto and sprinkled with cheesy, nutty nutritional yeast. Cremini mushrooms, slices of fresh tomato, briny artichokes, and roasted red peppers are piled on top before the flatbreads are baked to a crispy finish. A kale salad with dried apricots, almonds, and balsamic vinaigrette makes for a refreshing contrast."
            ],
            [   "name" => "Roasted Rainbow Carrots & Fennel",
                "cook_time" => 35,
                "recipe_text" => "with rice, kale, dates & basil pistou, cheesy artichoke bread",
                "description" => "We love rainbow carrots for their stunning jewel tones and sweet, earthy flavors. Tonight we roast them with fennel, which adds layers of caramelized, anise-like depth. The veggies are drizzled with an herby basil pistou and piled atop a bed of rice strewn with dates and kale. Toasted cheesy artichoke bread adds a unique component on the side."
            ],
            /*     20    */
            [   "name" => "Birria-Style Black Bean Tacos",
                "cook_time" => 30,
                "recipe_text" => "tomato cilantro salsa, scallion lime crema",
                "description" => "In this hearty vegetarian take on birria tacos, earthy black beans simmered with bell pepper, chili, cumin, and paprika make a surprisingly satisfying stand-in for meat. Once tender, the filling is spooned onto tortillas, sprinkled with Monterey Jack, and pan-toasted quesadilla-style until golden brown. The fragrant bean broth that’s left behind is an ultra-flavorful dipper for the crispy tacos, which are also served with tangy scallion crema and tomato salsa."
            ],
            [   "name" => "Peanut Tofu Udon Noodles",
                "cook_time" => 30,
                "recipe_text" => "sesame honey roasted carrots, red bell pepper, scallion",
                "description" => "Get ready to twirl your fork: These savory udon noodles are the perfect backdrop for vibrant veggies. You’ll mix quick-cooking udon with sautéed bell pepper and scallion, then stir in our house-made ginger-lime peanut sauce. Top with a flavorful duo of tofu cooked in umami-rich tamari sauce and honey sesame roasted carrots, and garnish with crunchy peanuts and fresh scallion greens."
            ],
            [   "name" => "Mediterranean Chicken",
                "cook_time" => 35,
                "recipe_text" => "artichokes & roasted red peppers, pepita pesto, Brussels sprouts",
                "description" => "Briny marinated artichoke hearts and sweet roasted red peppers, two hallmark ingredients of Mediterranean-style cuisine, star in this dinner. Chicken cutlets are pan-seared, then nestled into the veggies and finished in the oven until tender and juicy. A side of roasted Brussels sprouts topped with creamy feta completes the satisfying meal."
            ],
            [  "name" => "Shrimp Scampi",
                "cook_time" => 35,
                "recipe_text" => "spaghetti squash noodles, basil pesto, Parmesan, hazelnuts",
                "description" => "This dish has all the creamy delightfulness of shrimp scampi—minus the carbs! Here, our favorite noodle replacement, tender roasted spaghetti squash, is sautéed with butter and Parmesan cheese. It serves as a rich base for lemony, garlicky shrimp, pan-seared to perfection. Toasted hazelnuts and a drizzle of basil pesto finish the meal with a satisfying crunch and herby flavors. "
            ],
            [   "name" => "Smoky Pork Patties",
                "cook_time" => 30,
                "recipe_text" => "caramelized onion, roasted cauliflower, cabbage slaw with cotija",
                "description" => "Classic Spanish chorizo gets its distinctive taste from smoked, dried chiles. Inspired by that flavor profile, our chefs added a dash of Spanish-style seasoning (think smoked paprika, cumin, and crushed red pepper flakes) to these juicy pork patties, giving them depth. Luscious caramelized onion offers a touch of sweetness on top. Seasoned roasted cauliflower brings harmony to the plate."
            ],
            [   "name" => "Prosciutto, Artichoke Feta Salad",
                "cook_time" => 10,
                "recipe_text" => "tomatoes, bell pepper, lemon-Dijon vinaigrette, almonds",
                "description" => "Our chefs believe that more color in a salad means more deliciousness—and this one proves it. There’s fresh red bell pepper and grape tomatoes, savory prosciutto, briny artichoke hearts, and crisp green romaine lettuce. The keto-friendly salad is dressed in a lemon-Dijon vinaigrette, then garnished with almonds and herby feta."
            ],
            [   "name" => "Southwest Omelet with Bacon",
                "cook_time" => 20,
                "recipe_text" => "red bell pepper, tomato cilantro salsa, creamy guacamole",
                "description" => "One bite of this fluffy keto-friendly omelet, and you’ll fall in love with eggs all over again. First, you’ll sauté bacon until crispy. Then you’ll cook bell pepper and shallot spiced with chili, cumin, and paprika in that flavorful bacon fat. Stir the eggs in with the veggies until they set, then top with chopped bacon and sharp cheddar cheese and fold to form your omelet. A dollop of creamy guacamole, a garnish of fresh tomato cilantro salsa, and a drizzle of Cholula top off this hearty, flavorful 20-minute brunch."
            ],
            [   "name" => "Steak & Shrimp Peperonata",
                "cook_time" => 35,
                "recipe_text" => "Parmesan cheese, pine nuts, parsley-basil pepita pesto",
                "description" => "When you can’t decide between meat and seafood, why not have both? This keto-friendly surf and turf dinner centers around peperonata, a saucy mixture of tender, cooked-down bell peppers that happens to go great with both steak and shrimp. Thin zucchini ribbons give a veggie boost to the dish, while pine nuts add a toasty crunch. For even more sauce, there’s a parsley-basil pesto to drizzle over everything."
            ],
            [   "name" => "Ancho Chicken Soup",
                "cook_time" => 25,
                "recipe_text" => "cabbage, roasted red peppers, cotija, toasted pepitas",
                "description" => "Our custom ancho-cumin spice blend adds a swirl of earthy, smoky warmth to this creamy, veggie-loaded chicken soup. It’s full of juicy pan-seared bites of chicken, tender cabbage ribbons, and sweet roasted red peppers simmered in a creamy mushroom broth for earthy richness. Each steaming bowl can be customized with a cornucopia of toppings: fresh tomato, salty cotija, toasted pepitas, and fragrant cilantro."
            ],
            [   "name" => "Pork Chops with Tzatziki",
                "cook_time" => 35,
                "recipe_text" => "garlicky roasted tomatoes, chard salad with artichokes & feta",
                "description" => "Foil-packet roasting is the key to making the saucy tomato and garlic topping for tonight’s dinner. This easy technique locks in moisture during cooking, allowing the flavors to meld and the textures to soften—plus, it’s a breeze to clean up. The sauce is spooned over fennel-spiced pork chops, with a drizzle of tzatziki for creamy, tangy contrast. A chard salad with artichokes adds a fresh pop of flavor."
            ],
            /*    30     */
            [   "name" => "Monterey Jack Smothered Chicken",
                "cook_time" => 30,
                "recipe_text" => "creamy mushroom sauce, roasted zucchini, tomato & almonds",
                "description" => "Chicken, melty cheese, and creamy sauce make for the ultimate comfort trifecta—the culinary equivalent of a warm and cozy blanket. Here, chicken is seasoned with a smoky cumin and coriander blend, seared, then topped with a velvety mushroom-studded sauce and Monterey Jack cheese. On the side, there’s a heap of roasted zucchini half-moons and juicy tomato wedges. "
            ],
            [   "name" => "Chili-Ginger Pork Tenderloin",
                "cook_time" => 30,
                "recipe_text" => "spicy ginger-lime aïoli, slaw, broccoli, almonds",
                "description" => "In tonight’s pork tenderloin dinner, we drizzle spicy ginger-lime aïoli all over the top of the chili-and-ginger-spiced meat for a decadently creamy accent. A crunchy ginger-lime slaw and sautéed broccoli studded with almonds make nourishing and delicious sides (and excellent candidates for swiping up any extra aïoli)."
            ],
            [   "name" => "Lemon-Dijon Salmon",
                "cook_time" => 35,
                "recipe_text" => "chive butternut squash mash, sautéed cabbage & hazelnuts",
                "description" => "Our lemon-Dijon sauce is citrusy, tangy, and garlicky, and it makes an ideal marinade for tonight’s delectable seafood dish. Here, salmon fillets are marinated, then pan-seared until flaky. They’re served over creamy, chive-flecked mashed butternut squash. A side of sautéed cabbage, simmered with more of the lemon-Dijon sauce and topped with toasted hazelnuts, adds a crunchy contrast."
            ],
            [   "name" => "Cajun Chicken with Dijonnaise",
                "cook_time" => 25,
                "recipe_text" => "sautéed squash, bell pepper, tomato & celery, toasted pecans",
                "description" => "In this hearty dish packed with Cajun flavors, the chicken cutlets are dusted with a lively Cajun spice blend, then pan-seared. Once cooked, they’re drizzled with a Creole Dijonnaise for a punchy, creamy touch. A colorful sauté of yellow squash, red bell pepper, Roma tomato, and pecans adds earthy-sweet flavors on the side.  "
            ],
            [   "name" => "Smoky Pork & Kale Salad",
                "cook_time" => 25,
                "recipe_text" => "sautéed mushrooms & onion, Parmesan, creamy balsamic dressing",
                "description" => "This salad is bursting with flavor, layered with texture, and strewn with umami-packed ingredients that’ll definitely leave you satisfied. Hearty red kale leaves are massaged until tender, then tossed with caramelized mushrooms and onion, Parmesan cheese, and chewy-sweet dates. To finish, pile on smoky seasoned pork chops and even more Parm, then drizzle with a creamy balsamic dressing. This super-salad is at once sweet, savory, smoky, creamy, nutty, and tangy—basically, everything you could ever want or hope for."
            ],
            [   "name" => "Keto Cheese Fondue with Beef",
                "cook_time" => 30,
                "recipe_text" => "Parmesan frico chips, roasted broccoli, bell pepper",
                "description" => "You don’t need a fancy restaurant or fondue set to enjoy this sumptuous cheesy delicacy, just a pot and three of our favorite cheeses: gouda, white cheddar, and Swiss. Whisk the cheese with a creamy mix of milk and crème fraîche, and add a splash of white wine vinegar for complexity. Our three-cheese fondue comes with the ultimate pairings to dip and savor any way you like: Parmesan frico chips, roasted broccoli, seared beef tenderloin, and fresh bell pepper. Grab a date and your finest tableware, because you’re 30 minutes away from a delicious, decadent Valentine’s Day."
            ],
            [   "name" => "Spicy Honey-Glazed Harissa Chicken",
                "cook_time" => 30,
                "recipe_text" => "schug rice with peas, turmeric cauliflower, almonds",
                "description" => "Harissa, a North African hot pepper paste that’s spicy, earthy, and aromatic, is used here in spice-blend form as a flavor-packed rub for chicken. Once the chicken hits the pan, the seasoning turns toasty and fragrant in the hot oil. The finished cutlets are sliced into strips, then piled over rice mixed with herby schug (a spicy sauce with Yemeni origins) and peas. On the side, there’s roasted turmeric cauliflower for even more earthy notes. Finally, everything is drizzled with a warm honey glaze and sprinkled with roasted almonds for a little crunch."
            ],
            [   "name" => "Beef Tenderloin & Cherry Thyme Sauce",
                "cook_time" => 50,
                "recipe_text" => "prosciutto crostini, mashed potatoes, squash & Brussels",
                "description" => "This date-night meal is fit for your fanciest napkins and plates. For an appetizer, you’ll enjoy a delicious savory-sweet prosciutto and honey ricotta crostini. The main event is juicy oregano-garlic-seasoned beef tenderloin draped in a sumptuous sauce made with cherry jam, balsamic vinegar, and fresh thyme. On the side are buttery chive mashed potatoes and a colorful jumble of sweet roasted butternut squash and earthy, savory Brussels sprouts. Raise a glass to love, food, and a love of food.  "
            ],
            [   "name" => "Ranch Steak with Truffle Sauce",
                "cook_time" => 25,
                "recipe_text" => "creminis, roasted rainbow carrots, Parmesan",
                "description" => "This dish proves that delicious doesn’t also have to mean complicated. With just seven ingredients and 25 minutes on the clock, you’ll create a restaurant-worthy meal that’s sure to wow. Ranch steaks are pan-seared to a juicy finish, then placed atop a rich and savory truffle sauce studded with cremini mushrooms. They’re served alongside tender roasted rainbow carrots and showered with chives and Parmesan. "
            ],
            [   "name" => "Monterey Jack Burgers",
                "cook_time" => 30,
                "recipe_text" => "balsamic shallots, potato wedges, lemon aïoli",
                "description" => "Tonight’s hearty meal brings all the savory, cheesy goodness of classic pub burgers to your dinner table in just 30 minutes. Juicy pan-seared beef patties topped with bubbly Monterey Jack cheese and tangy-sweet balsamic shallots are nestled between toasty lemon aïoli–slathered brioche buns. Roasted potato wedges on the side round out this mouthwatering dish."
            ],
            /*  40   */
            [   "name" => "Spicy Turkey & Rice Skillet",
                "cook_time" => 25,
                "recipe_text" => "red bell pepper, chimichurri, spicy crema, scallion",
                "description" => "Every element in this turkey skillet is infused with bold Southwest-style flavors. A mix of cumin, sweet and smoked paprika, oregano, coriander, and garlic adds depth to ground turkey and bell pepper. Next, you’ll stir in fluffy jasmine rice and our zingy chimichurri sauce (featuring parsley, onion, red wine vinegar, and chili flakes). For a finishing touch, the hearty skillet is topped with Cholula-spiked crema and fresh scallion."
            ], 
            [   "name" => "Southwest Pork Chopped Salad",
                "cook_time" => 25,
                "recipe_text" => "charred corn salsa, toasted pepitas",
                "description" => "Smoky-sweet charred corn is a favorite, especially when it’s tossed into a salsa with fresh tomato, salty cotija cheese, and crisp scallion greens. You’ll scoop the salsa over cabbage and romaine lettuce and a healthy helping of Southwest-spiced ground pork to create a seriously satisfying chopped salad. Drizzle every bowlful with a creamy chimichurri sauce, then sprinkle with toasted pepitas. "
            ], 
            [   "name" => "Pistou Chicken Couscous Bowls",
                "cook_time" => 30,
                "recipe_text" => "zucchini, roasted red peppers, kale, dates",
                "description" => "Our riff on pistou (the Provençal take on pesto) includes nutty sunflower seeds and a touch of tangy red wine vinegar—and it’s just the thing to make these couscous bowls sing. First, seasoned chicken cutlets are seared until browned, then roasted with tender red peppers and zucchini to a juicy finish. That’s all served atop pearl couscous and kale, enriched with dates and a spoonful of herby pistou. The chicken is drizzled with even more pistou for a colorful (and delicious) finishing touch."
            ], 
            [   "name" => "Bean & Pepper Stuffed Tortillas",
                "cook_time" => 35,
                "recipe_text" => "chipotle-lime aïoli, tomato scallion salsa, guacamole",
                "description" => "These vegan stuffed tortillas are creamy, crispy, and surprisingly quesadilla-like! Instead of cheese, we’ve layered soft flour tortillas with homemade spiced refried beans and sautéed pepper and onion, then toasted them in a hot skillet. Want to customize your meal? You’ve got some irresistible options: A rich vegan chipotle mayo, a fresh tomato scallion salsa, and a ready-to-dollop guacamole are all yours for the topping."
            ], 
            [   "name" => "Blackened Cauliflower Bowls",
                "cook_time" => 30,
                "recipe_text" => "dirty rice, charred corn salsa, paprika-Dijon aïoli, pecans",
                "description" => "Cauliflower gets a major spice upgrade tonight with these Creole-style bowls. The veg is roasted in our blackening spices (think peppercorns, earthy-sweet paprika, and herbs). Next, you’ll make a salsa featuring charred corn, fresh tomato, scallion, and tangy lime juice. All of this goes over a bed of flavorful dirty rice. Pecans add a crunch on top, and a drizzle of vegan paprika-Dijon aïoli gives a creamy finish to the bowls. (Psst—don’t forget to douse the entire bowl in lime juice for a tangy punch.)"
            ], 
            [   "name" => "Toasted Corn & Bean Bowls",
                "cook_time" => 20,
                "recipe_text" => "creamy chimichurri, guacamole, pepitas, mushrooms, lettuce",
                "description" => "This meal pulls from the flavors of your favorite burrito bowl. There’s crisp romaine lettuce and fresh grape tomatoes dressed in a creamy avocado-spiked chimichurri. Beside the salad are smoky sautéed mushrooms and black beans. Topping things off are toasted corn and pepitas for a sweet final crunch. The best part? All these pops of punchy flavor are ready in just 20 minutes."
            ], 
            [   "name" => "Cheesy Corn & Potato Chowder",
                "cook_time" => 40,
                "recipe_text" => "with carrots, roasted red peppers & homemade multigrain croutons",
                "description" => "This creamy, cheesy chowder is comfort in a bowl. We love how the tender bits of potato and corn contrast with the crunchy croutons. Some of the sharp cheddar is melted into the hearty, paprika-tinged broth; the rest gets sprinkled over the warm chowder for a perfectly gooey topping."
            ], 
            [   "name" => "Greek Salad Flatbreads",
                "cook_time" => 30,
                "recipe_text" => "hummus, kale, tomato, olives, feta cheese, herby sour cream",
                "description" => "Bread is the only thing that’s flat in this dish. Everything piled on top is exciting and full of flavor. The flatbreads are spread with hummus that’s jazzed up with dates, oregano, and garlic. Then they’re topped with caramelized veggies, melty mozzarella, and briny feta cheese. For a healthy dose of freshness, Greek kale salad is piled on top. The final touch is a drizzle of lemon-dill sour cream."
            ], 
            [   "name" => "Garden Veggie Truffle Risotto",
                "cook_time" => 40,
                "recipe_text" => "cremini mushrooms, grape tomatoes, zucchini, Parmesan",
                "description" => "Think of risotto as a once-in-a-blue-moon meal? Think again. In just 40 minutes, you’ll whip up this bright and earthy version, topped with roasted cremini mushrooms, zucchini, and grape tomatoes that are infused with our rosemary, basil, and sage blend. A touch of truffle zest and a final sprinkle of Parmesan add even more savory oomph."
            ], 
            [   "name" => "BBQ Sweet Potato Tacos",
                "cook_time" => 25,
                "recipe_text" => "cabbage & carrot slaw, black beans, corn, cheesy tortillas",
                "description" => "When it comes to making a truly top-notch taco, it’s important to infuse each element with flavor. Here, we take inspiration from the beloved backyard BBQ! We begin with roasted black beans, sweet potatoes, and corn seasoned with our barbecue spice blend, then tossed with tangy-sweet barbecue sauce. The veggie filling gets stuffed into steamy flour tortillas topped with melty sharp cheddar. Finally, a crunchy cabbage and carrot slaw, dressed with a creamy vegan chimichurri, adds a bright and cooling note."
            ],
            /*  50   */
            [   "name" => "Blackened Barramundi with Dijonnaise",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Barramundi is the perfect fish to take on the bold flavors of the South. Here, the mild white fish is coated in blackening spices, then drizzled in paprika-spiced Creole Dijonnaise for tangy richness. A bevy of colorful sautéed veggies—including collards, bell pepper, tomato, and roasted red peppers—completes the meal."
            ],
            [   "name" => "Pork Tenderloin with Creamy Pistou",
                "cook_time" => 30,
                "recipe_text" => "r",
                "description" => "Our housemade basil pistou—a delicious blend of basil, sunflower seeds, aromatics, and tangy lemon juice—is used two ways in this fresh, flavorful meal. First, the pistou adds herby touches to fragrant jasmine rice mixed with chard, umami-packed sun-dried tomatoes, chewy-sweet dates, and briny feta cheese. The rest of the pistou is stirred into sour cream to make a creamy sauce for tender, juicy pork tenderloin seasoned with paprika, garlic, and oregano."
            ],
            [   "name" => "Spicy Coconut Curry Shrimp Soup",
                "cook_time" => 25,
                "recipe_text" => "r",
                "description" => "This curry-style soup comes together in just 25 minutes, and it can be as spicy as you like. To start, you’ll season succulent shrimp in a rich spice blend (think paprika, turmeric, coriander, and cardamom) before cooking. Next, you’ll start the soup with aromatics, more curry spice, and as many crushed red pepper flakes as desired. Finally, you’ll simmer the soup with coconut milk until lightly creamy. It’s served with a base of simple jasmine rice to help cool things off. "
            ],
            [   "name" => "Portobello 'Steaks' with Truffle Sauce",
                "cook_time" => 50,
                "recipe_text" => "r",
                "description" => "This vegan dinner practically screams decadence at every turn—not least because you’ll start with a fig jam crostini appetizer (or nibble on it while you cook with your plus-one!). Portobello “steaks” are marinated in umami-packed tamari sauce. They’re roasted and shingled over chive mashed potatoes, then served alongside roasted carrots with thyme. The “steaks” get even more luxurious flavor from truffle sauce—made creamy by coconut milk. You’re about to have two soulmates this Valentine’s Day: the one you cook with and the one you’ll eat. "
            ],
            [   "name" => "Hot Honey Edamame Salad",
                "cook_time" => 10,
                "recipe_text" => "r",
                "description" => "For this sweet-meets-spicy salad, you’ll heat edamame in hot honey to create a delicious (and protein-packed) topping. A crisp mix of lettuce, cabbage, and carrots forms the base, which gets tossed with bell pepper, scallion, and pineapple. A sprinkling of sesame seeds and cashews adds some crunch, and ginger-lime vinaigrette lends a tangy touch."
            ],
            [   "name" => "Prosciutto & Fresh Mozzarella Wraps",
                "cook_time" => 10,
                "recipe_text" => "r",
                "description" => "These 10-minute wraps are filled with flavor, and a bonus—any extra salad gets served on the side. The wraps are spread with creamy pesto, then layered with fresh mozzarella, prosciutto, and romaine dotted with fresh tomato and a balsamic vinaigrette. This wrap and salad combo is sure to be the envy of all your lunchmates."
            ],
            [   "name" => "Chicken & Bell Pepper Quesadillas",
                "cook_time" => 35,
                "recipe_text" => "r",
                "description" => "For tonight’s menu, we’ve amped up the flavor on these quesadillas with our Southwest spice blend (think cumin, paprika, oregano, and garlic). Tender chicken and bell pepper are sandwiched between flour tortillas with a melty blend of cheeses. The warm quesadillas are drizzled with a spicy Cholula crema and served with a charred corn, tomato, and cotija salsa to ensure you’ll crave bite after bite."
            ],
            [   "name" => "Cheesy Italian Meatloaves",
                "cook_time" => 35,
                "recipe_text" => "r",
                "description" => "These aren’t just any meatloaves. They’re extra-delicious thanks to Parmesan cheese, fresh garlic, and a dash of Italian seasoning mixed with the ground beef, plus a topping of melty mozzarella and tangy-sweet balsamic roasted red pepper sauce. Tender roasted broccoli adds a veggie boost to the meal, and buttery garlic-herb bread offers an irresistibly crispy accent on the side."
            ],
            [   "name" => "Pork with Cherry BBQ Sauce",
                "cook_time" => 35,
                "recipe_text" => "r",
                "description" => "Here’s a flavor combination that’s worthy of a second helping: Dried cherries are simmered in our sweet and tangy barbecue sauce, then spooned over ancho-cumin-spiced pork tenderloins for tonight’s gluten-free dinner. Herb-roasted potatoes and a kale salad (tossed with cabbage and sunflower seeds) complete the dish."
            ],
            [   "name" => "Peruvian-Spiced Barramundi",
                "cook_time" => 30,
                "recipe_text" => "r",
                "description" => "White fish has a reputation for being mild in flavor, but these buttery barramundi fillets seasoned with our bold Peruvian spice blend pack in the flavors of chili powder, cumin, smoked paprika, and dried orange peel. In short, this white fish is anything but mild. Pan-sear and finish in the oven until the skin turns potato-chip crisp. Add beautiful color and crunch to your plate with tangy cabbage and red pepper slaw, and serve with zesty lime rice and a drizzle of chimichurri sauce for a delicious creamy contrast."
            ],
             /*  60   */
            [   "name" => "Cheesy Artichoke Chicken Sandwiches",
                "cook_time" => 25,
                "recipe_text" => "kale salad with basil pistou, sunflower seeds & dates",
                "description" => "Sandwiches often get relegated instantly to the lunch category, but this one is sure to make you rethink that designation. For the bread: Buttered ciabattas are toasted, slathered with a cheesy artichoke topping (artichoke hearts, cream cheese, and Parmesan), then returned to the oven to melt everything together. For the filling: The cheesy artichoke bread is stacked with seared chicken cutlets and basil pistou. On the side: There’s a kale salad with sweet dates and sunflower seeds for a light crunch. Lunch or dinner, these are sure to satisfy any sandwich craving."
            ],
            [   "name" => "Black Bean Flautas",
                "cook_time" => 30,
                "recipe_text" => "kale, bell pepper, edamame, coconut-lime rice",
                "description" => "Pan-frying the flautas in tonight’s Tex-Mex dinner gives the flour tortillas a crispy golden-brown exterior and delivers craveable crunchy contrast to the hearty spiced bean filling. Guacamole—one of our favorite plant-based condiments—is dolloped over the top for cooling creaminess in every bite. A kale salad piled on the side gets pops of sweet-smoky flavor from broiled corn and onion, completing the meal with a nutritious crunch."
            ],
            [   "name" => "Thai Fresh Pea & Peanut Curry",
                "cook_time" => 25,
                "recipe_text" => "kale salad with broiled corn, guacamole, chipotle aïoli",
                "description" => "Our dreamy ginger-lime peanut sauce brings on big Thai flavors in tonight’s vegan curry. It’s made with coconut milk for creaminess and a dash of Sriracha for heat, and acts as the perfect saucy addition to sautéed kale, bell pepper, and edamame. Served with fluffy, fragrant coconut-lime rice, the curry is topped with gingery fresh peas and peanuts for a crunchy boost."
            ],
            [   "name" => "Roasted Garlic & Fennel Flatbreads",
                "cook_time" => 35,
                "recipe_text" => "artichoke hearts, seasoned tomato, kale salad",
                "description" => "Why do our chefs love roasting garlic? The simple process softens the bold allium’s pungent flavor and allows its milder nutty undertones to shine. Here, you’ll mash roasted garlic and fold it in with coconut cream to make a rich, fragrant sauce. It’s slathered over toasty flatbreads and topped with tomato slices, fennel, and artichoke hearts for a creamy, crunchy, juicy blend of textures in every bite."
            ],
            [   "name" => "Maple Carrot Power Bowls",
                "cook_time" => 30,
                "recipe_text" => "turmeric-spiced pearl couscous, kale, cranberries, tahini",
                "description" => "Think maple syrup is just for breakfast? These sweet and smoky carrots prove otherwise! Harissa-spiced carrots are coated with rich, sweet maple syrup, then cooked until fork-tender. They’re served over a mound of toasted pearl couscous topped with sautéed kale, dried cranberries, and a sprinkle of nutty nutritional yeast. It’s all finished with a drizzle of creamy herb miso-tahini sauce and a sprinkle of toasted walnuts."
            ],
            [   "name" => "Southwest Zucchini Boats",
                "cook_time" => 30,
                "recipe_text" => "rice, black beans, kale, chimichurri, cotija, pepitas",
                "description" => "You’ll go overboard for these colorful zucchini boats brimming with Southwest flair. They’re filled with rice, corn, and black beans that are kicked up with our creamy chimichurri sauce. A sprinkling of cotija cheese on top gets roasted until melty to add richness. Enjoy these zucchini boats with the extra rice filling on the side and with a scattering of crunchy pepitas."
            ],
            [   "name" => "Blistered Tomato & Feta Cavatappi",
                "cook_time" => 30,
                "recipe_text" => "sautéed onion & kale, Italian-style spices",
                "description" => "Baked feta pasta was a TikTok sensation for good reason: al dente pasta with roasted tomatoes and salty feta is delicious! Here, we remix that combo on the stovetop, adding kale for a veggie boost and cream cheese for maximum lusciousness. The corkscrew-shaped cavatappi pasta adds a fun … twist!"
            ],
            [   "name" => "French Onion Mushroom Melts",
                "cook_time" => 30,
                "recipe_text" => "red bell pepper, provolone, Swiss, sweet potato wedges",
                "description" => "There’s nothing quite like digging your spoon into French onion soup: the savory, sweet, nutty flavors are comfort in a bowl. Our chefs harnessed those flavors and put them in another comforting meal—the melt. You’ll sauté mushrooms and bell pepper in mushroom broth, then pile the veggies onto toasted baguettes. After topping the veggies with provolone and Swiss, you’ll pop the sandwiches into the oven until they’re melty and magnificent. On the side, sweet potato wedges add sweetness to the savory main attraction."
            ],
            [   "name" => "Southwest-Spiced Beef Taco Salad",
                "cook_time" => 20,
                "recipe_text" => "romaine, bell pepper, pickled onion, chimichurri & guacamole",
                "description" => "This flavor-packed salad features crisp romaine lettuce, cabbage, bell pepper, and juicy tomato tossed in a tangy, creamy dressing made with sour cream, agave, lime juice, chipotle powder, and chili powder. Top with saucy Southwest-spiced ground beef, sharp cheddar cheese, and toasted pepitas for the perfect finishing touch on this satisfying lunch or dinner."
            ],
            [   "name" => "Tamari Turkey Lettuce Wraps",
                "cook_time" => 25,
                "recipe_text" => "olives, almonds, feta, crema, cucumber tomato salad",
                "description" => "You’ll be savoring these Asian-style turkey lettuce wraps in a quick 25 minutes. Ground turkey, bell pepper, onions, and ginger are sautéed until tender, then simmered with garlic, tamari, and butter until rich and saucy. Pile this flavorful mix into crisp romaine leaves and finish with sliced scallion and toasted peanuts for crunch. There’s also an umami-rich sauce for dipping or drizzling made with honey, tamari, lime, and crushed red pepper flakes to deliver even more flavor to every bite."
            ],
            /*  70   */
            [   "name" => "Steak & Creamy Parmesan Shrimp",
                "cook_time" => 35,
                "recipe_text" => "roasted broccoli & shallot, garlic mashed potatoes",
                "description" => "Savory is the name of the game when it comes to this surf ’n’ turf meal. First, you’ll roast broccoli and shallot seasoned with oregano and garlic, then use the same spice blend on the “turf” (aka bavette steaks) before searing. The shrimp, cooked in the same pan as the steaks, simmer in a creamy Parmesan sauce. You’ll serve the shrimp-topped steak with decadent garlic mashed potatoes on the side. "
            ],
            [   "name" => "Cuban Chicken with Chimichurri",
                "cook_time" => 25,
                "recipe_text" => "red bell pepper, snap peas, cabbage, pepitas, cotija",
                "description" => "This Latin American–inspired meal gets a flavorful kick from our creamy chimichurri: a bright and tangy herb-based sauce made with parsley, garlic, avocado mayo, and a squeeze of lemon juice. Here, the sauce is drizzled over pan-seared chicken seasoned with an earthy Cuban spice blend (featuring cumin, oregano, and dried orange peel). Sautéed red bell pepper, snap peas, and cabbage make a colorful and delicious base for the chicken, while pepitas add a craveable crunch. Cotija rounds out the meal with a creamy-salty finishing touch. "
            ],
            [   "name" => "Shrimp Fra Diavolo",
                "cook_time" => 25,
                "recipe_text" => "zucchini, roasted red peppers, onion, basil pesto",
                "description" => "Fra diavolo, the Italian-American dish, is traditionally made with pasta and seafood dressed in a spicy tomato sauce with garlic and fresh herbs. Our chefs took inspiration from those flavors to make this gluten-free version, with sautéed zucchini, onion, and roasted red peppers standing in for the pasta. To top off the bowls, there’s a caprese-inspired mix of fresh mozzarella, tomato, and basil pesto. Psst—if you like things spicy, stir in crushed red pepper flakes from your pantry at the end of cooking."
            ],
            [   "name" => "Pork with Lemon-Basil Sauce",
                "cook_time" => 35,
                "recipe_text" => "cauliflower, bell pepper, feta cheese, almonds",
                "description" => "Pork tenderloins get the royal treatment in this elevated dish. Dusted in a smoky-sweet spice blend (featuring sweet and smoked paprika with dried orange peel), the tenderloins are pan-seared, then roasted to perfection. Our luxurious lemon-basil caper sauce is drizzled over the top for bright and tangy notes. Sautéed cauliflower with red bell pepper, feta cheese, and almonds completes the plate. "
            ],
            [   "name" => "Southwest Chicken Bowls",
                "cook_time" => 20,
                "recipe_text" => "cauliflower “rice,” bell pepper, tomato, cheddar, Cholula",
                "description" => "This 20-minute bowl has all the flavors from your favorite fast-casual chain restaurant, but in a keto–friendly way. Chicken strips, seasoned with Southwest seasoning, are served with fajita-style veggies over a base of buttered cauliflower “rice” sautéed with cumin seeds. The real fun comes with all the toppings: spiced cilantro-lime crema, diced fresh tomato, toasted pepitas, and cheddar cheese. A drizzle of Cholula sauce adds just the right amount of heat."
            ],
            [   "name" => "Cheesy Dijon Pork Chops",
                "cook_time" => 30,
                "recipe_text" => "roasted carrots, green beans with almonds",
                "description" => "If you like savory and tangy pairings, you’ll love the way our Swiss cheese and Dijon topping gives tonight’s juicy pork chops a rich, bright finish. The pan-seared pork is paired with roasted carrots finished with a dash of crushed red pepper flakes for a hint of heat. A side of buttery green beans studded with toasted almonds rounds out the hearty 30-minute meal."
            ],
            [   "name" => "Chicken with Spicy Apricot Pan Sauce",
                "cook_time" => 30,
                "recipe_text" => "scallion rice, sautéed broccoli with sesame seeds",
                "description" => "Pan sauces are an easy way to add so much flavor to any meal. Case in point: this delicious dish. Here, the pan sauce is made with apricot jam, tamari sauce, Sriracha, and a pinch of sugar for an elixir that’s all at once sweet, savory, and spicy, with a hint of umami. It’s spooned over sliced chicken set atop steamy, scallion-studded rice. On the side, there’s sautéed broccoli with sesame seeds, perfect for catching any runaway sauce."
            ],
            [   "name" => "Beef Tenderloin with Balsamic Sauce",
                "cook_time" => 35,
                "recipe_text" => "maple Brussels sprouts, brown butter roasted potatoes",
                "description" => "Every element of this luxurious dinner packs warming layers of flavor. Tangy dried-cherry balsamic sauce drapes seared beef tenderloin in silky richness. Maple syrup delivers a touch of sweetness to roasted Brussels sprouts. And nutty brown butter makes fork-tender potatoes especially satisfying. "
            ],
            [   "name" => "Chicken with Garlic Chard Rice",
                "cook_time" => 30,
                "recipe_text" => "apricot pan sauce, roasted almonds",
                "description" => "The secret ingredient to a great pan sauce for chicken is fond, the culinary term for the browned bits left in the pan after searing your cutlets. You’ll deglaze the fond with chicken stock, and add apricot jam for sweetness, a knob of butter for silkiness, and red pepper flakes for a kiss of heat. The resulting sauce quickly elevates this simple, comforting chicken dinner to an elegant meal with a delicious balance of flavors. Serve alongside fluffy rice tossed with savory sautéed chard and garlic, and garnish with chopped roasted almonds to add an enticing crunch."
            ],
            [   "name" => "Beef Cavatappi Skillet",
                "cook_time" => 30,
                "recipe_text" => "r",
                "description" => "Cavatappi’s twirly shape takes its name from the Italian word for “corkscrew.” Not only is it fun to eat, it’s also practical: The pasta’s many nooks and crannies cling onto creamy sauce and catch all the mix-ins (here, Italian-spiced beef, sweet peas, roasted red peppers, and lots of cheese). No more hunting through strands of spaghetti, then twirling with a fork and spoon—with cavatappi, you can easily curate bite after perfect bite. "
            ],
            /*  80   */
            [   "name" => "Truffle Linguine with Chicken",
                "cook_time" => 30,
                "recipe_text" => "cremini mushrooms, garlic, peas",
                "description" => "For rich, earthy depth, our chefs added decadent truffle butter to the flavorful sauce in tonight’s rustic pasta bowls. Here, the creamy sauce—strewn with sautéed cremini mushrooms and green peas—coats al dente linguine noodles. It’s all topped with pan-seared chicken strips seasoned with a blend of fragrant dried herbs and red pepper."
            ],
            [   "name" => "Chimichurri White Bean Stuffed Peppers",
                "cook_time" => 35,
                "recipe_text" => "herby kale rice, pepitas, cilantro, cashew 'Parmesan'",
                "description" => "The best thing about stuffed peppers? All the different ways you can stuff them! Tonight, you’ll start the filling by simmering the beans in a savory broth, then season with a blend of chili, cumin, and paprika to impart smoky flavor before mashing for extra texture. The filling is piled into roasted pepper halves, sprinkled with cashew “Parmesan,” and served over a bed of kale rice with a drizzle of chimichurri sauce."
            ],
            [   "name" => "Creamy Mushroom Soup",
                "cook_time" => 30,
                "recipe_text" => "carrots, homemade cashew 'Parmesan' croutons",
                "description" => "Tonight’s mushroom soup is rich, creamy, and vegan! Our secret? Coconut milk—a versatile dairy-free alternative to cream that provides the silky richness in this comforting soup. Here, it simmers with cremini mushrooms, onion, carrots, and a flavorful mushroom broth until the flavors pleasantly meld. Crispy homemade croutons seasoned with cashew “Parmesan” and fresh parsley are so good, you’ll want one in every spoonful."
            ],
            [   "name" => "Black Bean & Mushroom Enchiladas",
                "cook_time" => 45,
                "recipe_text" => "green bell pepper, corn, tomato, chimichurri sauce",
                "description" => "Tonight’s vegan enchiladas are positively bursting with flavorful veggies. The hearty black bean and mushroom filling is seasoned with a smoky paprika-cumin blend, imparting bold and earthy notes. That’s rolled up into flour tortillas, then smothered in a richly spiced enchilada sauce and baked until warm and bubbly. The enchiladas are served under a sauté of corn, bell pepper, and tomato coated in creamy chimichurri sauce. An extra drizzle of the chimichurri adds a cooling finish."
            ],
            [   "name" => "Harissa Onion-Jam Tofu Sandwiches",
                "cook_time" => 25,
                "recipe_text" => "kale salad with apple & sunflower seeds",
                "description" => "These vegan ciabatta sandwiches turn lunch into a white-napkin-level experience. Tofu is cut into thick slabs, rubbed with harissa seasoning, and dusted in cornstarch before being seared to a delicious golden brown. That golden tofu is piled onto toasted ciabattas alongside caramelized onion that’s been spiked with cider vinegar and enhanced with almonds and apricot jam. On the side, there’s a balsamic-dressed kale salad with apple slices and sunflower seeds. Pro tip: Add a bit of salad to your sandwiches for a flavor explosion."
            ],
            [   "name" => "Butternut Squash Chili",
                "cook_time" => 30,
                "recipe_text" => "black beans, roasted red peppers, corn, crispy tortilla strips",
                "description" => "Adobo-seasoned tomatoes are the smoky-sweet undercurrent of tonight’s vegetarian chili. Rich in peppery flavors, they infuse warm earthiness into the pot of simmering butternut squash, black beans, roasted red peppers, and corn. A sprinkle of cheddar cheese and a dollop of cilantro-lime crema temper the heat, and homemade tortilla strips deliver a crispy finale."
            ],
            [   "name" => "Chickpea Salad Sandwiches",
                "cook_time" => 30,
                "recipe_text" => "chard, cranberries, walnuts, curry-spiced carrot fries",
                "description" => "There’s a reason chickpeas are considered a superfood: They’re high in protein, chock-full of vitamins and minerals, and, most importantly, downright delicious. Here, we’ve mixed chickpeas with dried cranberries, walnuts, feta, and a bright, creamy lemon aïoli to make a surprisingly satisfying filling for pita sandwiches. Curry-spiced carrot fries with scallion make a savory side."
            ],
            [   "name" => "Steak & Butternut Squash Salad",
                "cook_time" => 30,
                "recipe_text" => "kale, creamy sunflower basil pistou, hazelnuts, Parmesan",
                "description" => "Think salads are boring? Our chefs beg to differ! In tonight’s dinner, you’ll take hearty veggies and juicy ranch steaks and turn them into a veritable feast. First, butternut squash and fennel are roasted with our signature applewood-smoked sea salt. Once cooled, the veggies are tossed with lacinato kale and topped with sliced steak. Everything is garnished with toasted hazelnuts, nutty Parmesan, and a creamy sunflower basil pistou. Thought you knew salads? Think again. "
            ],
            [   "name" => "Tilapia Tacos with Cotija Street Corn",
                "cook_time" => 30,
                "recipe_text" => "chimichurri crema, zesty cabbage slaw, scallion",
                "description" => "There’s something about fish tacos that instantly transports you to a sunny beachside restaurant. Here, tilapia fillets are dusted with a flavorful paprika and orange spice blend, then roasted until tender and flaky. The savory fish is piled into tortillas, topped with zesty cabbage slaw for crunch, and drizzled with an herbaceous creamy chimichurri sauce. To complement the tacos, there’s a side of sautéed corn and scallion tossed with salty cotija cheese and a bright squeeze of lime juice, reminiscent of elotes (a beloved Mexican street food). "
            ],
            [   "name" => "Salmon with Caper Sauce",
                "cook_time" => 35,
                "recipe_text" => "butternut squash, broccoli, artichokes, sun-dried tomatoes",
                "description" => "Capers are a classic pairing for fish, and for good reason—the tangy pickled buds add briny, savory complexity to seafood. In tonight’s delectable dish, our luscious lemon-basil caper sauce is drizzled over flaky roasted salmon fillets. Spanish-style roasted potatoes add a smoky, peppery element to the plate, while sautéed kale with roasted red peppers, feta, and almonds lends earthy-sweet flavors on the side."
            ],
             /*  90   */
            [   "name" => "Vegetable Beef Soup",
                "cook_time" => 25,
                "recipe_text" => "carrot, celery, green beans, Italian herbs, Parmesan",
                "description" => "Warm up your week with tonight’s veggie-loaded from-scratch soup. It all starts with carrot, celery, onion, and beef seasoned simply with salt and pepper and cooked until tender. Green beans are stirred in before everything is simmered in a creamy tomato broth seasoned with Italian herbs. We suggest keeping a tasting spoon nearby to sample the soup as you go, seasoning with salt and pepper as needed to perfectly customize it to your taste preferences. Once it’s done to your liking, ladle the soup into bowls and top with nutty Parmesan cheese."
            ],
            [  "name" => "Curry-Spiced Sweet Potato Wraps",
               "cook_time" => 35,
               "recipe_text" => "roasted chickpeas, mango slaw, curry hummus, schug sauce",
               "description" => "These vegan wraps are bursting with big and bold flavors. Sweet potatoes and chickpeas are seasoned with curry powder and roasted until tender. Hearty kale is tossed with herbaceous schug sauce, then combined with roasted sweet potatoes and chickpeas to form a savory filling. Flour tortillas are spread with creamy curry hummus to ensure the filling stays in place, and a cabbage slaw with mangos and almonds makes a sweet side."
            ],
            [  "name" => "Chickpea & Red Pepper Bulgur Bowls",
               "cook_time" => 30,
               "recipe_text" => "kale, tomato, olives, lemon, red pepper hummus, schug sauce",
               "description" => "Roasted red peppers pack sweet and savory notes into multiple layers of these bowls. First, they’re added to bulgur wheat for fluffy, flavorful grains. They’re also featured in hummus, which adds lusciousness and creaminess to the bowls. Roasted chickpeas (seasoned with paprika, garlic, and oregano) top a kale salad featuring tomato, Kalamata olives, scallion, and lemon dressing. A drizzle of schug sauce finishes off these bright, hearty bowls. Psst—don’t forget a squeeze of lemon juice for more tangy flavor on top."
            ],
            [  "name" => "Steak & Shrimp with Chive Sauce",
               "cook_time" => 40,
               "recipe_text" => "cheesy mashed butternut squash, roasted broccoli",
               "description" => "Surf&turf meets comfort food in this inventive, colorful keto-friendly twist on a steakhouse classic. Season bavette steaks and shrimp with salt and pepper, then sear separately to crispy perfection and top both with a creamy chive sauce enriched with umami-packed mushroom amino sauce and a tangy swirl of cream cheese. Two stellar sides accompany these saucy stars of land and sea: tender roasted broccoli and savory mashed butternut squash with sharp cheddar cheese."
            ],
            [  "name" => "Curried Coconut Turkey Soup",
               "cook_time" => 25,
               "recipe_text" => "zucchini, garlic pitas, cashews, sour cream",
               "description" => "This soup is packed with curry-style flavor from yellow curry powder, garam masala, and creamy coconut milk. Aromatic onions and ginger add depth to the soup, which is loaded with good-for-you zucchini and savory ground turkey. To finish, drizzle with sour cream, sprinkle with roasted cashews, and enjoy with toasted garlic pitas alongside for dunking."
            ],
            [  "name" => "Thai-Style Chicken & Bell Pepper Soup",
               "cook_time" => 30,
               "recipe_text" => "rice, shiitake mushrooms, scallion, sesame seeds",
               "description" => "Our chefs took inspiration from Thai coconut chicken soup for tonight’s bowls. Pulling from traditional flavors, they layered bell pepper, shiitake mushrooms, citrusy aromatics, and a savory-meets-creamy broth, along with jasmine rice for extra heartiness. That all comes together in just 30 minutes with a garnish of scallion and black sesame seeds. Choose your biggest spoon—you’ll want to scoop up as much in one bite as possible."
            ],
            [  "name" => "Tropical Teriyaki Sockeye Salmon Bowls",
               "cook_time" => 25,
               "recipe_text" => "rice, mangos, cabbage slaw, Sriracha aïoli, pickled ginger",
               "description" => "These umami-rich salmon bowls pack a tropical flavor punch that’s especially satisfying. Bake wild-caught sockeye salmon at high heat with gluten-free teriyaki sauce and a generous sprinkle of black and white sesame seeds for perfect fillets that are flaky on the inside and crisp on the outside. You’ll top this delicious dish with a creamy ginger-Sriracha aïoli for a touch of heat, and balance the richness with a colorful slaw, chopped mangos, and zippy pickled ginger."
            ],
            [  "name" => "Thai-Style Coconut Chicken Curry",
               "cook_time" => 25,
               "recipe_text" => "jasmine rice, bell pepper, scallion, black sesame seedsr",
               "description" => "Our chefs took inspiration from a traditional Thai coconut chicken curry for these bowls that deliver deeply aromatic comfort. The dish comes together with rich coconut milk and savory chicken stock, along with bell pepper, onions, ginger, and chicken seasoned with rich curry spices. Garnishes of scallion, sesame seeds, and crushed red pepper flakes (for a touch of heat) deliver bits of crunch and color on top. "
            ],
            [  "name" => "Chicken with Creamy Bacon Sauce",
               "cook_time" => 30,
               "recipe_text" => "creamy mashed butternut squash, roasted broccoli",
               "description" => "Creamy. Bacon. Sauce. Do those three words make your mouth water? You’re only human! This sauce is like a cashmere coat for chicken cutlets, so sumptuous it completely elevates the mild white meat. A generous side of sautéed green beans and mushrooms adds to the abundant feeling of this meal. A flurry of sliced almonds at the end lends a little something extra."
            ],
            [  "name" => "Greek Kale Salad With Pita Croutons",
               "cook_time" => 10,
               "recipe_text" => "hummus, kale, tomato, olives, feta cheese, herby sour cream",
               "description" => "What elevates this quick salad lunch? Crunchy pita croutons. You’ll toss a pita in the toaster and dice it once toasted. There’s also mozzarella marinated in a balsamic vinaigrette with oregano and garlic. That’s tossed on top of a kale salad with grape tomatoes, feta, and cucumber. Almonds and the croutons finish off this zingy Greek salad."
            ]
        ];
    }
}
