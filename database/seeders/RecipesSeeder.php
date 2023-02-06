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
            [   "name" => "Parmesan-Crusted Chicken",
                "cook_time" => 30,
                "recipe_text"=> "rvd",
                "description" => "This Parmesan chicken is juicy, crispy, cheesy—and keto! Here, the traditional breaded chicken cutlet gets a flavorful makeover with a sprinkle of rosemary, basil, and sage, plus lemon aïoli and a coating of golden Parmesan (instead of the usual breadcrumbs). Two fresh sides bring it all together: sautéed green beans with toasted hazelnuts and herby marinated Roma tomatoes. "
            ],
            [   "name" => "Blackened Shrimp & 'Grits'",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "The classic Southern combo of shrimp and grits gets a gluten-free, keto-friendly reimagining in this 25-minute dish. Here, cauliflower “grits,” made with cream cheese and melty sharp cheddar cheese, fill in for the traditional cornmeal base. They’re topped with tender blackened shrimp pan-seared with green bell pepper for added texture and flavor. A lemon-chive vinaigrette drizzled over the top adds a bright and tangy finish."
            ],
            [   "name" => "Southwest Pork Patties",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Harnessing the power of the Maillard reaction (aka the scientific process responsible for creating delicious browning in the pan), we sear tonight’s keto-friendly pork patties in a sizzling-hot skillet. The result is juicy patties fragrant with Southwestern-style chili spices and sealed with a deeply flavorful crust. Served over a butternut squash hash with kale and cabbage, the patties are drizzled with a cilantro vinaigrette for bold, herby brightness."
            ],
            [   "name" => "Creamy Ancho Turkey Soup",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Our ancho-cumin spice blend adds a swirl of earthy, smoky warmth to this creamy, veggie-loaded turkey soup. It’s brimming with ground turkey, cabbage ribbons, and sweet roasted red peppers, all simmered in a creamy mushroom broth for earthy richness. Each steaming keto-friendly bowl can be customized with a cornucopia of toppings: fresh tomato, salty cotija, toasted pepitas, and fragrant cilantro."
            ],
            [   "name" => "Cheesy Artichoke Beef Patties",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Who among us hasn’t wondered, “Can I just eat cheesy artichoke dip for dinner?” Here—in this keto-friendly meal—you’ll do just that. Beef patties are seasoned with an Italian herb and red pepper blend, pan seared, then topped with a pillowy ricotta, nutty Parmesan, and artichoke blend. Next, they’re broiled until the meat is juicy and the topping is melty. They’re served over cauliflower 'rice' with kale and topped with a sunflower basil sauce for a pop of herby freshness. Moral of the story: You can eat artichoke dip for dinner!"
            ],
            [   "name" => "Pork with Creamy Caper Sauce",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "The sunny colors and flavors in tonight’s pork chops set this keto-friendly dish apart. The chops are seasoned with a lemon pepper and herb blend, seared, then drizzled with a creamy lemon-basil caper sauce. Crunchy pistachios are sprinkled over the top, and on the side, there’s a kale salad with chewy dates and sweet carrots, plus a healthy helping of sautéed squash and tomato. "
            ],
            [   "name" => "Herb-Roasted Chicken with Bacon",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "This keto-friendly meal is filled with comforting flavors, starting with the main course: roasted chicken seasoned with a blend of rosemary, basil, and sage. The sides only add to that same texture-filled, cozy vibe. There’s mashed cauliflower “rice” with cream cheese and white cheddar (a flavorful cousin of cheesy mashed potatoes!), plus, Brussels sprouts and onion sautéed in bacon fat for extra richness, and garnished with bacon and pecans."
            ],
            [   "name" => "Lemony Sockeye Salmon & Succotash",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "On tonight’s plates, you’ll find wild-caught sockeye salmon seared with herbs, then roasted with lemon rounds for citrusy flavor. On the side, green beans, corn, tomato, and a bit of lemon zest blend into a colorful succotash, while herb-roasted potatoes add savory balance. And since it wouldn’t be a bright meal without lemon butter, this sunshiny sauce tops the salmon for a sweet and delicate finish."
            ],
            [   "name" => "Blackened Tilapia",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Tonight’s Creole-inspired seafood dish is loaded with bold flavors—and it’s ready for the dinner table in just 30 minutes! Here, blackening spices impart peppery depth to delicate, pan-seared tilapia fillets. The flaky fish is drizzled in a bright and creamy chipotle aïoli and served alongside roasted sweet potatoes, cabbage, and pepitas. Guacamole adds richness and freshness to every bite. "
            ],
            [   "name" => "White Bean Chicken Chili",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "This thick, rich white bean and chicken chili satisfies all on its own, but it’s lifted to new heights with a bevy of delicious add-ons, from an herby crema and sharp cheddar cheese to Roma tomato, zesty scallion greens, and a drizzle of Cholula sauce for a bit of heat. Just sauté chicken strips (seasoned with an ancho-cumin blend) along with corn and scallion until tender, simmer it down with cannellini beans in a cream cheese–laced chicken stock, then garnish to your heart’s desire."
            ],
            /*   10    */
            [   "name" => "Middle Eastern-Style Beef Bowls",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Earthy cumin, savory-sweet roasted red peppers, and piquant feta cheese are all Middle Eastern staples—and tonight they add layers of flavor to loaded beef and veggie bowls. Dusted in a spicy cumin-allspice blend, ground beef is pan-seared with zucchini and roasted peppers, then sprinkled with feta. It’s all piled over almond-studded rice pilaf and finished with creamy cardamom-spiced yogurt. Kick up the heat with a final drizzle of Cholula sauce."
            ],
            [   "name" => "Gyro-Spiced Pork Tenderloin Kale Salad",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "This hearty salad is brimming with delicious flavors, starting with tender, gyro-spiced pork tenderloin. That tops a tangy mix of kale, fresh Roma tomato, chewy sweet dates, and salty feta cheese for a tantalizing variety of textures. A drizzle of sour cream with lemon and dill adds creamy notes, while garlicky whole-wheat pita croutons add sparks of toasty crunch throughout."
            ],
            [   "name" => "Apricot-Glazed Salmon",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "One of our favorite ways to add an extra layer of flavor to seafood dishes is with a simple glaze. For this delectable dish, we’ve brushed sweet, tart apricot jam onto seared salmon fillets before roasting them to a flaky finish. Cardamom-spiced Greek yogurt is drizzled over the top for creamy, tangy notes. Roasted butternut squash and cabbage, plus toasted pearl couscous strewn with apricots and pistachios, round out the colorful meal."
            ],
            [   "name" => "Cranberry BBQ Turkey Burgers",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Sweet meets tangy for the cranberry BBQ sauce on tonight’s ancho-spiced turkey burgers. These saucy patties are nestled into toasted brioche buns and served with roasted potato wedges and a fresh, creamy chimichurri slaw (think cabbage, carrots, parsley, and cilantro). Can’t get enough of that zingy BBQ sauce? Use your potato wedges to swipe up any extra deliciousness."
            ],
            [   "name" => "Southwest Tomato & Black Bean Soup",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "This satisfyingly creamy vegan soup delivers flavor-packed comfort no matter the weather. Southwest flavors like paprika, cumin, and lime run through the luxurious broth. For texture and contrast, you’ll find diced green bell pepper in the soup, and salsa dolloped on top of each bowl."
            ],
            [   "name" => "Kidney Bean 'Meatballs'",
                "cook_time" => 45,
                "recipe_text" => "rvd",
                "description" => "Superfood chia seeds help hold these crispy vegan 'meatballs' together. Here, the seeds slip under the radar once mixed with mashed kidney beans, breadcrumbs, and a paprika-parsley blend. The entire mixture is rolled into balls, roasted to toasty perfection, then served over jasmine rice. Our creamy paprika-Dijon aïoli and a tangy corn and red pepper relish top it all off."
            ],
            [   "name" => "Herbed Chicken & Creamy Spaghetti",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "Tonight’s dish will make you feel like you’re dining under the sun with a slew of bright flavors. A luscious sun-dried tomato sauce, made with coconut milk, coats long strands of spaghetti squash. For even more veg, there’s chopped chard that’s cooked into the sauce as well as tossed with the spaghetti squash. Chicken cutlets, seared with oregano-garlic seasoning, top the vegetables, along with roasted almonds and red pepper flakes."
            ],
            [   "name" => "Creamy Pesto Farfalle Bowls",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Creamy sauces are an ideal match for farfalle (“butterflies” in Italian) because of the way they cling to the folds of the wing-shaped pasta. In tonight’s Italian-inspired dish, we’ve created a rich, herbaceous sauce for whole-wheat farfalle by stirring cream cheese into our basil and Parmesan pesto. Roasted butternut squash, juicy grape tomatoes, and earthy-sweet peas are added at the end before everything is topped with mozzarella and baked to a delightfully melty finish."
            ],
            [   "name" => "Mushroom, Artichoke & Pesto Flatbreads",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Tonight’s plant-based flatbreads pack a punch of Italian-inspired flavors. In this 30-minute meal, the flatbreads are slathered with basil pesto and sprinkled with cheesy, nutty nutritional yeast. Cremini mushrooms, slices of fresh tomato, briny artichokes, and roasted red peppers are piled on top before the flatbreads are baked to a crispy finish. A kale salad with dried apricots, almonds, and balsamic vinaigrette makes for a refreshing contrast."
            ],
            [   "name" => "Roasted Rainbow Carrots & Fennel",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "We love rainbow carrots for their stunning jewel tones and sweet, earthy flavors. Tonight we roast them with fennel, which adds layers of caramelized, anise-like depth. The veggies are drizzled with an herby basil pistou and piled atop a bed of rice strewn with dates and kale. Toasted cheesy artichoke bread adds a unique component on the side."
            ],
            /*     20    */
            [   "name" => "Birria-Style Black Bean Tacos",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "In this hearty vegetarian take on birria tacos, earthy black beans simmered with bell pepper, chili, cumin, and paprika make a surprisingly satisfying stand-in for meat. Once tender, the filling is spooned onto tortillas, sprinkled with Monterey Jack, and pan-toasted quesadilla-style until golden brown. The fragrant bean broth that’s left behind is an ultra-flavorful dipper for the crispy tacos, which are also served with tangy scallion crema and tomato salsa."
            ],
            [   "name" => "Peanut Tofu Udon Noodles",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Get ready to twirl your fork: These savory udon noodles are the perfect backdrop for vibrant veggies. You’ll mix quick-cooking udon with sautéed bell pepper and scallion, then stir in our house-made ginger-lime peanut sauce. Top with a flavorful duo of tofu cooked in umami-rich tamari sauce and honey sesame roasted carrots, and garnish with crunchy peanuts and fresh scallion greens."
            ],
            [   "name" => "Mediterranean Chicken",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "Briny marinated artichoke hearts and sweet roasted red peppers, two hallmark ingredients of Mediterranean-style cuisine, star in this dinner. Chicken cutlets are pan-seared, then nestled into the veggies and finished in the oven until tender and juicy. A side of roasted Brussels sprouts topped with creamy feta completes the satisfying meal."
            ],
            [  "name" => "Shrimp Scampi",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "This dish has all the creamy delightfulness of shrimp scampi—minus the carbs! Here, our favorite noodle replacement, tender roasted spaghetti squash, is sautéed with butter and Parmesan cheese. It serves as a rich base for lemony, garlicky shrimp, pan-seared to perfection. Toasted hazelnuts and a drizzle of basil pesto finish the meal with a satisfying crunch and herby flavors. "
            ],
            [   "name" => "Smoky Pork Patties",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Classic Spanish chorizo gets its distinctive taste from smoked, dried chiles. Inspired by that flavor profile, our chefs added a dash of Spanish-style seasoning (think smoked paprika, cumin, and crushed red pepper flakes) to these juicy pork patties, giving them depth. Luscious caramelized onion offers a touch of sweetness on top. Seasoned roasted cauliflower brings harmony to the plate."
            ],
            [   "name" => "Prosciutto, Artichoke Feta Salad",
                "cook_time" => 10,
                "recipe_text" => "rvd",
                "description" => "Our chefs believe that more color in a salad means more deliciousness—and this one proves it. There’s fresh red bell pepper and grape tomatoes, savory prosciutto, briny artichoke hearts, and crisp green romaine lettuce. The keto-friendly salad is dressed in a lemon-Dijon vinaigrette, then garnished with almonds and herby feta."
            ],
            [   "name" => "Southwest Omelet with Bacon",
                "cook_time" => 20,
                "recipe_text" => "rvd",
                "description" => "One bite of this fluffy keto-friendly omelet, and you’ll fall in love with eggs all over again. First, you’ll sauté bacon until crispy. Then you’ll cook bell pepper and shallot spiced with chili, cumin, and paprika in that flavorful bacon fat. Stir the eggs in with the veggies until they set, then top with chopped bacon and sharp cheddar cheese and fold to form your omelet. A dollop of creamy guacamole, a garnish of fresh tomato cilantro salsa, and a drizzle of Cholula top off this hearty, flavorful 20-minute brunch."
            ],
            [   "name" => "Steak & Shrimp Peperonata",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "When you can’t decide between meat and seafood, why not have both? This keto-friendly surf and turf dinner centers around peperonata, a saucy mixture of tender, cooked-down bell peppers that happens to go great with both steak and shrimp. Thin zucchini ribbons give a veggie boost to the dish, while pine nuts add a toasty crunch. For even more sauce, there’s a parsley-basil pesto to drizzle over everything."
            ],
            [   "name" => "Ancho Chicken Soup",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Our custom ancho-cumin spice blend adds a swirl of earthy, smoky warmth to this creamy, veggie-loaded chicken soup. It’s full of juicy pan-seared bites of chicken, tender cabbage ribbons, and sweet roasted red peppers simmered in a creamy mushroom broth for earthy richness. Each steaming bowl can be customized with a cornucopia of toppings: fresh tomato, salty cotija, toasted pepitas, and fragrant cilantro."
            ],
            [   "name" => "Pork Chops with Tzatziki",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "Foil-packet roasting is the key to making the saucy tomato and garlic topping for tonight’s dinner. This easy technique locks in moisture during cooking, allowing the flavors to meld and the textures to soften—plus, it’s a breeze to clean up. The sauce is spooned over fennel-spiced pork chops, with a drizzle of tzatziki for creamy, tangy contrast. A chard salad with artichokes adds a fresh pop of flavor."
            ],
            /*    30     */
            [   "name" => "Monterey Jack Smothered Chicken",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Chicken, melty cheese, and creamy sauce make for the ultimate comfort trifecta—the culinary equivalent of a warm and cozy blanket. Here, chicken is seasoned with a smoky cumin and coriander blend, seared, then topped with a velvety mushroom-studded sauce and Monterey Jack cheese. On the side, there’s a heap of roasted zucchini half-moons and juicy tomato wedges. "
            ],
            [   "name" => "Chili-Ginger Pork Tenderloin",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "In tonight’s pork tenderloin dinner, we drizzle spicy ginger-lime aïoli all over the top of the chili-and-ginger-spiced meat for a decadently creamy accent. A crunchy ginger-lime slaw and sautéed broccoli studded with almonds make nourishing and delicious sides (and excellent candidates for swiping up any extra aïoli)."
            ],
            [   "name" => "Lemon-Dijon Salmon",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "Our lemon-Dijon sauce is citrusy, tangy, and garlicky, and it makes an ideal marinade for tonight’s delectable seafood dish. Here, salmon fillets are marinated, then pan-seared until flaky. They’re served over creamy, chive-flecked mashed butternut squash. A side of sautéed cabbage, simmered with more of the lemon-Dijon sauce and topped with toasted hazelnuts, adds a crunchy contrast."
            ],
            [   "name" => "Cajun Chicken with Dijonnaise",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "In this hearty dish packed with Cajun flavors, the chicken cutlets are dusted with a lively Cajun spice blend, then pan-seared. Once cooked, they’re drizzled with a Creole Dijonnaise for a punchy, creamy touch. A colorful sauté of yellow squash, red bell pepper, Roma tomato, and pecans adds earthy-sweet flavors on the side.  "
            ],
            [   "name" => "Smoky Pork & Kale Salad",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "This salad is bursting with flavor, layered with texture, and strewn with umami-packed ingredients that’ll definitely leave you satisfied. Hearty red kale leaves are massaged until tender, then tossed with caramelized mushrooms and onion, Parmesan cheese, and chewy-sweet dates. To finish, pile on smoky seasoned pork chops and even more Parm, then drizzle with a creamy balsamic dressing. This super-salad is at once sweet, savory, smoky, creamy, nutty, and tangy—basically, everything you could ever want or hope for."
            ],
            [   "name" => "Keto Cheese Fondue with Beef",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "You don’t need a fancy restaurant or fondue set to enjoy this sumptuous cheesy delicacy, just a pot and three of our favorite cheeses: gouda, white cheddar, and Swiss. Whisk the cheese with a creamy mix of milk and crème fraîche, and add a splash of white wine vinegar for complexity. Our three-cheese fondue comes with the ultimate pairings to dip and savor any way you like: Parmesan frico chips, roasted broccoli, seared beef tenderloin, and fresh bell pepper. Grab a date and your finest tableware, because you’re 30 minutes away from a delicious, decadent Valentine’s Day."
            ],
            [   "name" => "Spicy Honey-Glazed Harissa Chicken",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Harissa, a North African hot pepper paste that’s spicy, earthy, and aromatic, is used here in spice-blend form as a flavor-packed rub for chicken. Once the chicken hits the pan, the seasoning turns toasty and fragrant in the hot oil. The finished cutlets are sliced into strips, then piled over rice mixed with herby schug (a spicy sauce with Yemeni origins) and peas. On the side, there’s roasted turmeric cauliflower for even more earthy notes. Finally, everything is drizzled with a warm honey glaze and sprinkled with roasted almonds for a little crunch."
            ],
            [   "name" => "Beef Tenderloin & Cherry Thyme Sauce",
                "cook_time" => 50,
                "recipe_text" => "rvd",
                "description" => "This date-night meal is fit for your fanciest napkins and plates. For an appetizer, you’ll enjoy a delicious savory-sweet prosciutto and honey ricotta crostini. The main event is juicy oregano-garlic-seasoned beef tenderloin draped in a sumptuous sauce made with cherry jam, balsamic vinegar, and fresh thyme. On the side are buttery chive mashed potatoes and a colorful jumble of sweet roasted butternut squash and earthy, savory Brussels sprouts. Raise a glass to love, food, and a love of food.  "
            ],
            [   "name" => "Ranch Steak with Truffle Sauce",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "This dish proves that delicious doesn’t also have to mean complicated. With just seven ingredients and 25 minutes on the clock, you’ll create a restaurant-worthy meal that’s sure to wow. Ranch steaks are pan-seared to a juicy finish, then placed atop a rich and savory truffle sauce studded with cremini mushrooms. They’re served alongside tender roasted rainbow carrots and showered with chives and Parmesan. "
            ],
            [   "name" => "Monterey Jack Burgers",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Tonight’s hearty meal brings all the savory, cheesy goodness of classic pub burgers to your dinner table in just 30 minutes. Juicy pan-seared beef patties topped with bubbly Monterey Jack cheese and tangy-sweet balsamic shallots are nestled between toasty lemon aïoli–slathered brioche buns. Roasted potato wedges on the side round out this mouthwatering dish."
            ],
            /*  40   */
            [   "name" => "Spicy Turkey & Rice Skillet",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Every element in this turkey skillet is infused with bold Southwest-style flavors. A mix of cumin, sweet and smoked paprika, oregano, coriander, and garlic adds depth to ground turkey and bell pepper. Next, you’ll stir in fluffy jasmine rice and our zingy chimichurri sauce (featuring parsley, onion, red wine vinegar, and chili flakes). For a finishing touch, the hearty skillet is topped with Cholula-spiked crema and fresh scallion."
            ], 
            [   "name" => "Southwest Pork Chopped Salad",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "Smoky-sweet charred corn is a favorite, especially when it’s tossed into a salsa with fresh tomato, salty cotija cheese, and crisp scallion greens. You’ll scoop the salsa over cabbage and romaine lettuce and a healthy helping of Southwest-spiced ground pork to create a seriously satisfying chopped salad. Drizzle every bowlful with a creamy chimichurri sauce, then sprinkle with toasted pepitas. "
            ], 
            [   "name" => "Pistou Chicken Couscous Bowls",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Our riff on pistou (the Provençal take on pesto) includes nutty sunflower seeds and a touch of tangy red wine vinegar—and it’s just the thing to make these couscous bowls sing. First, seasoned chicken cutlets are seared until browned, then roasted with tender red peppers and zucchini to a juicy finish. That’s all served atop pearl couscous and kale, enriched with dates and a spoonful of herby pistou. The chicken is drizzled with even more pistou for a colorful (and delicious) finishing touch."
            ], 
            [   "name" => "Bean & Pepper Stuffed Tortillas",
                "cook_time" => 35,
                "recipe_text" => "rvd",
                "description" => "These vegan stuffed tortillas are creamy, crispy, and surprisingly quesadilla-like! Instead of cheese, we’ve layered soft flour tortillas with homemade spiced refried beans and sautéed pepper and onion, then toasted them in a hot skillet. Want to customize your meal? You’ve got some irresistible options: A rich vegan chipotle mayo, a fresh tomato scallion salsa, and a ready-to-dollop guacamole are all yours for the topping."
            ], 
            [   "name" => "Blackened Cauliflower Bowls",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Cauliflower gets a major spice upgrade tonight with these Creole-style bowls. The veg is roasted in our blackening spices (think peppercorns, earthy-sweet paprika, and herbs). Next, you’ll make a salsa featuring charred corn, fresh tomato, scallion, and tangy lime juice. All of this goes over a bed of flavorful dirty rice. Pecans add a crunch on top, and a drizzle of vegan paprika-Dijon aïoli gives a creamy finish to the bowls. (Psst—don’t forget to douse the entire bowl in lime juice for a tangy punch.)"
            ], 
            [   "name" => "Toasted Corn & Bean Bowls",
                "cook_time" => 20,
                "recipe_text" => "rvd",
                "description" => "This meal pulls from the flavors of your favorite burrito bowl. There’s crisp romaine lettuce and fresh grape tomatoes dressed in a creamy avocado-spiked chimichurri. Beside the salad are smoky sautéed mushrooms and black beans. Topping things off are toasted corn and pepitas for a sweet final crunch. The best part? All these pops of punchy flavor are ready in just 20 minutes."
            ], 
            [   "name" => "Cheesy Corn & Potato Chowder",
                "cook_time" => 40,
                "recipe_text" => "rvd",
                "description" => "This creamy, cheesy chowder is comfort in a bowl. We love how the tender bits of potato and corn contrast with the crunchy croutons. Some of the sharp cheddar is melted into the hearty, paprika-tinged broth; the rest gets sprinkled over the warm chowder for a perfectly gooey topping."
            ], 
            [   "name" => "Greek Salad Flatbreads",
                "cook_time" => 30,
                "recipe_text" => "rvd",
                "description" => "Bread is the only thing that’s flat in this dish. Everything piled on top is exciting and full of flavor. The flatbreads are spread with hummus that’s jazzed up with dates, oregano, and garlic. Then they’re topped with caramelized veggies, melty mozzarella, and briny feta cheese. For a healthy dose of freshness, Greek kale salad is piled on top. The final touch is a drizzle of lemon-dill sour cream."
            ], 
            [   "name" => "Garden Veggie Truffle Risotto",
                "cook_time" => 40,
                "recipe_text" => "rvd",
                "description" => "Think of risotto as a once-in-a-blue-moon meal? Think again. In just 40 minutes, you’ll whip up this bright and earthy version, topped with roasted cremini mushrooms, zucchini, and grape tomatoes that are infused with our rosemary, basil, and sage blend. A touch of truffle zest and a final sprinkle of Parmesan add even more savory oomph."
            ], 
            [   "name" => "BBQ Sweet Potato Tacos",
                "cook_time" => 25,
                "recipe_text" => "rvd",
                "description" => "When it comes to making a truly top-notch taco, it’s important to infuse each element with flavor. Here, we take inspiration from the beloved backyard BBQ! We begin with roasted black beans, sweet potatoes, and corn seasoned with our barbecue spice blend, then tossed with tangy-sweet barbecue sauce. The veggie filling gets stuffed into steamy flour tortillas topped with melty sharp cheddar. Finally, a crunchy cabbage and carrot slaw, dressed with a creamy vegan chimichurri, adds a bright and cooling note."
            ]
        ];
        $count = 200;

        for ($i = 51; $i <= $count; $i++) {
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
