<?php

use PHPUnit\Framework\TestCase;
use iTech\Model\RecipeModel;

class RecipeModelTest extends TestCase
{

    private $returnedRecipesString = '{
"1": {
"name": "Caramel Pretzel Chocolate Chip Cookies",
"description": "",
"servings": "12",
"thumbnail":
"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/545dd684ec2e4ce1ba12afec4b6dbc59\/BFV15930_CaramelPretzel_ChocolateChipCookies-Thumb1080.jpg",
"duration": "",
"ingredients": [
{
"id": "1",
"recipe_id": "1",
"name": "all-purpose flour",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 cups all-purpose flour"
},
{
"id": "2",
"recipe_id": "1",
"name": "baking soda",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon baking soda"
},
{
"id": "3",
"recipe_id": "1",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon salt"
},
{
"id": "4",
"recipe_id": "1",
"name": "butter",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup butter, softened"
},
{
"id": "5",
"recipe_id": "1",
"name": "brown sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup packed brown sugar"
},
{
"id": "6",
"recipe_id": "1",
"name": "granulated sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup granulated sugar"
},
{
"id": "7",
"recipe_id": "1",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "2 teaspoons vanilla extract"
},
{
"id": "8",
"recipe_id": "1",
"name": "large egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "4 large eggs"
},
{
"id": "9",
"recipe_id": "1",
"name": "pretzel twist",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "n\/a"
},
{
"id": "10",
"recipe_id": "1",
"name": "chocolate chips",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1 ½",
"text": "1½ cups chocolate chips"
},
{
"id": "11",
"recipe_id": "1",
"name": "caramel candy",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1 ½",
"text": "1½ cups caramel candies, unwrapped"
}
],
"instructions": [
{
"id": "1",
"recipe_id": "1",
"appliance": "oven",
"position": "1",
"temperature": "400",
"text": "Preheat the oven to 400°F (200°C)."
},
{
"id": "2",
"recipe_id": "1",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a medium bowl, whisk together the flour, baking soda, and salt. Set aside."
},
{
"id": "3",
"recipe_id": "1",
"appliance": "",
"position": "3",
"temperature": "",
"text": "In a large bowl, beat together the butter, brown sugar, granulated sugar, and vanilla extract until smooth."
},
{
"id": "4",
"recipe_id": "1",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Add the eggs, 1 at a time, beating to incorporate before adding the next."
},
{
"id": "5",
"recipe_id": "1",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Add the flour mixture a bit at a time while beating, until it forms a smooth dough."
},
{
"id": "6",
"recipe_id": "1",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Add the pretzels to a zip-top bag and crush with a rolling pin."
},
{
"id": "7",
"recipe_id": "1",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Fold in the chocolate chips and crushed pretzels until evenly combined."
},
{
"id": "8",
"recipe_id": "1",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Press a caramel flat and place in the middle of a ball of dough, about 2 tablespoons."
},
{
"id": "9",
"recipe_id": "1",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Fold the dough around the caramel, using a bit more to seal if necessary. Place on a well-greased or
parchment-lined baking sheet."
},
{
"id": "10",
"recipe_id": "1",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Bake for 8-10 minutes, then remove from the oven."
},
{
"id": "11",
"recipe_id": "1",
"appliance": "",
"position": "11",
"temperature": "",
"text": "While still warm, press a single pretzel into the top of each cookie. Serve with a cold glass of milk or on
their own!"
},
{
"id": "12",
"recipe_id": "1",
"appliance": "",
"position": "12",
"temperature": "",
"text": "Enjoy!"
}
]
},
"2": {
"name": "The Best Soft And Chewy Snickerdoodle Cookies",
"description": "",
"servings": "24",
"thumbnail": "https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/96041.jpg",
"duration": "",
"ingredients": [
{
"id": "12",
"recipe_id": "2",
"name": "ground cinnamon",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 tablespoons ground cinnamon"
},
{
"id": "13",
"recipe_id": "2",
"name": "butter",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup butter, softened"
},
{
"id": "14",
"recipe_id": "2",
"name": "vanilla",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoon vanilla"
},
{
"id": "15",
"recipe_id": "2",
"name": "sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup sugar"
},
{
"id": "16",
"recipe_id": "2",
"name": "brown sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "⅓",
"text": "⅓ cup brown sugar"
},
{
"id": "17",
"recipe_id": "2",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 eggs"
},
{
"id": "18",
"recipe_id": "2",
"name": "flour",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "3.0",
"text": "3 cups flour"
},
{
"id": "19",
"recipe_id": "2",
"name": "cream of tartar",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoons cream of tartar"
},
{
"id": "20",
"recipe_id": "2",
"name": "baking soda",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "1 teaspoon baking soda"
},
{
"id": "21",
"recipe_id": "2",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "½",
"text": "¼ teaspoon salt"
}
],
"instructions": [
{
"id": "13",
"recipe_id": "2",
"appliance": "",
"position": "1",
"temperature": "",
"text": "In a small bowl, mix together the ingredients for the cinnamon sugar mix until evenly incorporated. Set aside."
},
{
"id": "14",
"recipe_id": "2",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Now make the cookie dough, in a large mixing bowl, whip the butter with vanilla until light and fluffy."
},
{
"id": "15",
"recipe_id": "2",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add the sugar and brown sugar and mix until well incorporated."
},
{
"id": "16",
"recipe_id": "2",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Add the eggs and stir until thoroughly incorporated."
},
{
"id": "17",
"recipe_id": "2",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Using a sift add the flour, cream of tartar, cinnamon, baking soda, and salt and sift into the dough. Combine
until evenly mixed."
},
{
"id": "18",
"recipe_id": "2",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Cover with plastic wrap and chill."
},
{
"id": "19",
"recipe_id": "2",
"appliance": "oven",
"position": "7",
"temperature": "375",
"text": "Preheat the oven to 375˚F (190˚C)."
},
{
"id": "20",
"recipe_id": "2",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Using your hands roll dough into ping pong sized balls."
},
{
"id": "21",
"recipe_id": "2",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Dip the dough into cinnamon sugar mixture and roll around covering the dough ball completely."
},
{
"id": "22",
"recipe_id": "2",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Place cookie dough on parchment paper-lined baking sheet and bake for 10-12 minutes."
},
{
"id": "23",
"recipe_id": "2",
"appliance": "",
"position": "11",
"temperature": "",
"text": "Allow to cool and serve."
},
{
"id": "24",
"recipe_id": "2",
"appliance": "",
"position": "12",
"temperature": "",
"text": "Enjoy!"
}
]
},
"3": {
"name": "The Best Chewy Chocolate Chip Cookies",
"description": "",
"servings": "12",
"thumbnail": "https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/62298.jpg",
"duration": "65",
"ingredients": [
{
"id": "22",
"recipe_id": "3",
"name": "granulated sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup sugar"
},
{
"id": "23",
"recipe_id": "3",
"name": "brown sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "¾",
"text": "¾ cup brown sugar, packed"
},
{
"id": "24",
"recipe_id": "3",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon salt"
},
{
"id": "25",
"recipe_id": "3",
"name": "unsalted butter",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "115.0",
"text": "½ cup butter, melted"
},
{
"id": "26",
"recipe_id": "3",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 egg"
},
{
"id": "27",
"recipe_id": "3",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon vanilla extract"
},
{
"id": "28",
"recipe_id": "3",
"name": "all-purpose flour",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1 ¼",
"text": "1¼ cups all-purpose flour"
},
{
"id": "29",
"recipe_id": "3",
"name": "baking soda",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ teaspoon baking soda"
},
{
"id": "30",
"recipe_id": "3",
"name": "milk or semi-sweet chocolate chunks",
"unitName": "ounce",
"unitAbbreviation": "oz",
"unitSystem": "imperial",
"quantity": "4.0",
"text": "4 ounces milk or semi-sweet chocolate chunks"
},
{
"id": "31",
"recipe_id": "3",
"name": "dark chocolate chunk",
"unitName": "ounce",
"unitAbbreviation": "oz",
"unitSystem": "imperial",
"quantity": "4.0",
"text": "4 ounces dark chocolate chunks (or your preference)"
}
],
"instructions": [
{
"id": "25",
"recipe_id": "3",
"appliance": "",
"position": "1",
"temperature": "",
"text": "In a large bowl, whisk together the sugars, salt, and butter until a paste forms with no lumps."
},
{
"id": "26",
"recipe_id": "3",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Whisk in the egg and vanilla, beating until light ribbons fall off the whisk and remain for a short while
before falling back into the mixture."
},
{
"id": "27",
"recipe_id": "3",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Sift in the flour and baking soda, then fold the mixture with a spatula (Be careful not to overmix, which would
cause the gluten in the flour to toughen resulting in cakier cookies)."
},
{
"id": "28",
"recipe_id": "3",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Fold in the chocolate chunks, then chill the dough for at least 30 minutes. For a more intense toffee-like
flavor and deeper color, chill the dough overnight. The longer the dough rests, the more complex its flavor will be."
},
{
"id": "29",
"recipe_id": "3",
"appliance": "oven",
"position": "5",
"temperature": "350",
"text": "Preheat oven to 350°F (180°C). Line a baking sheet with parchment paper."
},
{
"id": "30",
"recipe_id": "3",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Scoop the dough with an ice-cream scoop onto a parchment paper-lined baking sheet, leaving at least 4 inches
(10 cm) of space between cookies and 2 inches (5 cm) of space from the edges of the pan so that the cookies can spread
evenly."
},
{
"id": "31",
"recipe_id": "3",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Bake for 12-15 minutes, or until the edges have started to barely brown."
},
{
"id": "32",
"recipe_id": "3",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Cool completely before serving."
},
{
"id": "33",
"recipe_id": "3",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Enjoy!"
}
]
},
"4": {
"name": "Double Fudge Irish Cream Cookies",
"description": "",
"servings": "9",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/5637076656fb4c76a5ece8404a4dae2a\/BFV5148_Double-Fudge-Irish-Cream-Cookies_FB1080SQ.jpg",
"duration": "",
"ingredients": [
{
"id": "32",
"recipe_id": "4",
"name": "butter",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup softened butter"
},
{
"id": "33",
"recipe_id": "4",
"name": "sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1 ½",
"text": "1 1\/2 cup sugar"
},
{
"id": "34",
"recipe_id": "4",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 eggs"
},
{
"id": "35",
"recipe_id": "4",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tsp vanilla extract"
},
{
"id": "36",
"recipe_id": "4",
"name": "irish cream",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "8.0",
"text": "8 Tbsp. Irish Cream"
},
{
"id": "37",
"recipe_id": "4",
"name": "all-purpose flour",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "2 ⅔",
"text": "2 2\/3 cups all-purpose flour"
},
{
"id": "38",
"recipe_id": "4",
"name": "cocoa powder",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "1\/2 cups cocoa powder"
},
{
"id": "39",
"recipe_id": "4",
"name": "instant coffee powder",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tsp instant coffee powder"
},
{
"id": "40",
"recipe_id": "4",
"name": "baking soda",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1 ¼",
"text": "1 1\/4 tsp baking soda"
},
{
"id": "41",
"recipe_id": "4",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "¼",
"text": "1\/4 tsp salt"
},
{
"id": "42",
"recipe_id": "4",
"name": "white chocolate chip",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup white chocolate chips"
},
{
"id": "43",
"recipe_id": "4",
"name": "milk chocolate chips",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "1\/2 cup milk chocolate chips"
}
],
"instructions": [
{
"id": "34",
"recipe_id": "4",
"appliance": "",
"position": "1",
"temperature": "",
"text": "Cream butter, sugar, eggs and vanilla until fluffy."
},
{
"id": "35",
"recipe_id": "4",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Add in Irish Cream and mix."
},
{
"id": "36",
"recipe_id": "4",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add flour, cocoa powder, instant coffee, baking soda and salt and mix until combined."
},
{
"id": "37",
"recipe_id": "4",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Fold in chocolate chips. Refrigerate dough for 4-6 hours."
},
{
"id": "38",
"recipe_id": "4",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Roll into balls."
},
{
"id": "39",
"recipe_id": "4",
"appliance": "oven",
"position": "6",
"temperature": "350",
"text": "Set on a baking sheet. Bake at 350˚F (175˚C) for 10 minutes"
},
{
"id": "40",
"recipe_id": "4",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy!"
}
]
},
"5": {
"name": "3 Ingredient Peanut Butter Cookies",
"description": "",
"servings": "25",
"thumbnail": "https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/334c9eee7f37412fba5111e291dd6cb1\/YT_Thumb.jpg",
"duration": "",
"ingredients": [
{
"id": "44",
"recipe_id": "5",
"name": "peanut butter",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup peanut butter"
},
{
"id": "45",
"recipe_id": "5",
"name": "sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup sugar"
},
{
"id": "46",
"recipe_id": "5",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 egg"
}
],
"instructions": [
{
"id": "41",
"recipe_id": "5",
"appliance": "oven",
"position": "1",
"temperature": "350",
"text": "Preheat oven to 350ºF (180ºC)."
},
{
"id": "42",
"recipe_id": "5",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a large bowl, mix together the peanut butter, sugar, and egg."
},
{
"id": "43",
"recipe_id": "5",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Scoop out a spoonful of dough and roll it into a ball. Place the cookie balls onto a nonstick baking sheet."
},
{
"id": "44",
"recipe_id": "5",
"appliance": "",
"position": "4",
"temperature": "",
"text": "For extra decoration and to make them cook more evenly, flatten the cookie balls by pressing a fork down on top
of them, then press it down again at a 90º angle to make a criss-cross pattern."
},
{
"id": "45",
"recipe_id": "5",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Bake for 8-10 minutes or until the bottom of the cookies are golden brown."
},
{
"id": "46",
"recipe_id": "5",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Remove from baking sheet and cool."
},
{
"id": "47",
"recipe_id": "5",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy!"
}
]
},
"6": {
"name": "Mocha Latte Slow Cooker Eggnog",
"description": "",
"servings": "5",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/0bdfb6816a8e4ebf8b57f18325420768\/BFV15594_Eggnog4Ways_fb.jpg",
"duration": "",
"ingredients": [
{
"id": "47",
"recipe_id": "6",
"name": "eggnog",
"unitName": "liter",
"unitAbbreviation": "L",
"unitSystem": "metric",
"quantity": "1.0",
"text": "1 quart eggnog"
},
{
"id": "48",
"recipe_id": "6",
"name": "coffee",
"unitName": "milliliter",
"unitAbbreviation": "mL",
"unitSystem": "metric",
"quantity": "480.0",
"text": "2 cups coffee"
},
{
"id": "49",
"recipe_id": "6",
"name": "cocoa powder",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "40.0",
"text": "⅓ cup cocoa powder"
},
{
"id": "50",
"recipe_id": "6",
"name": "vanilla",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon vanilla"
},
{
"id": "51",
"recipe_id": "6",
"name": "nutmeg",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ teaspoon nutmeg"
}
],
"instructions": [
{
"id": "48",
"recipe_id": "6",
"appliance": "",
"position": "1",
"temperature": "",
"text": "Add all ingredients to slow cooker and stir."
},
{
"id": "49",
"recipe_id": "6",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Cook on High for 1 hour, stirring occasionally."
},
{
"id": "50",
"recipe_id": "6",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Top with whipped cream and sprinkle on cocoa powder."
},
{
"id": "51",
"recipe_id": "6",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Enjoy!"
}
]
},
"7": {
"name": "Peppermint Mocha Cannoli",
"description": "",
"servings": "4",
"thumbnail":
"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/13359f86be464aceb43b00477a427cc9\/BFV4780_PeppermintMochaCannoli-Thumb1080SQ.jpg",
"duration": "",
"ingredients": [
{
"id": "52",
"recipe_id": "7",
"name": "flour",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 Cups Flour"
},
{
"id": "53",
"recipe_id": "7",
"name": "sugar",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 Tbsp. Sugar"
},
{
"id": "54",
"recipe_id": "7",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "¼",
"text": "1\/4 tsp Salt"
},
{
"id": "55",
"recipe_id": "7",
"name": "instant espresso powder",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tsp. Instant Espresso Powder"
},
{
"id": "56",
"recipe_id": "7",
"name": "cold butter",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 Tbsp. Cold Butter - cubed"
},
{
"id": "57",
"recipe_id": "7",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 Egg - Separated"
},
{
"id": "58",
"recipe_id": "7",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tsp Vanilla Extract"
},
{
"id": "59",
"recipe_id": "7",
"name": "dry white wine",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "1\/2 Cup Dry White Wine"
},
{
"id": "60",
"recipe_id": "7",
"name": "whole milk ricotta cheese",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 Cups Whole Milk Ricotta Cheese"
},
{
"id": "61",
"recipe_id": "7",
"name": "powdered sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "⅓",
"text": "1\/3 Cup Powdered Sugar"
},
{
"id": "62",
"recipe_id": "7",
"name": "cocoa powder",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 Tbsp. Cocoa Powder"
},
{
"id": "63",
"recipe_id": "7",
"name": "instant espresso powder",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "¾",
"text": "3\/4 tsp. Instant Espresso Powder"
},
{
"id": "64",
"recipe_id": "7",
"name": "candy cane",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "Crushed Candy Canes\/peppermints"
},
{
"id": "65",
"recipe_id": "7",
"name": "dark chocolate",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Dark Chocolate for Melting"
},
{
"id": "66",
"recipe_id": "7",
"name": "oil",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Oil for frying"
}
],
"instructions": [
{
"id": "52",
"recipe_id": "7",
"appliance": "",
"position": "1",
"temperature": "",
"text": "Separate egg white and egg yolk into two small bowls. Set aside."
},
{
"id": "53",
"recipe_id": "7",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a large bowl, whisk together flour, sugar, salt, and 1 teaspoon instant espresso powder. Add the butter and
work into the flour mixture with your fingertips until it reaches a sandy consistency."
},
{
"id": "54",
"recipe_id": "7",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add the egg yolk, vanilla extract, and white wine. Mix together first with a wooden spoon, then finish by
kneading it out on a lightly floured surface with your hands until the dough comes together and becomes smooth. Form
into a ball and cover with plastic wrap. Refrigerate dough for 30 minutes to an hour."
},
{
"id": "55",
"recipe_id": "7",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Form into a ball and cover with plastic wrap. Refrigerate dough for 30 minutes to an hour."
},
{
"id": "56",
"recipe_id": "7",
"appliance": "",
"position": "5",
"temperature": "",
"text": "To make the filling: in a medium bowl whisk together the ricotta cheese, powdered sugar, cocoa powder, and ¾
teaspoon instant espresso powder. Refrigerate until ready to pipe. If the ricotta is especially wet, first remove excess
moisture by patting it down with paper towels."
},
{
"id": "57",
"recipe_id": "7",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Remove the chilled dough and divide in half. Roll out to as thin as possible on a lightly floured surface.
Using a small bowl, cookie cutter, or jar lid, cut into circles (re-rolling the circles and re-cutting if necessary to
reach desired thinness). Wrap dough around a lightly greased cannoli form and seal with egg white."
},
{
"id": "58",
"recipe_id": "7",
"appliance": "stovetop",
"position": "7",
"temperature": "350",
"text": "Heat oil to 350˚F (175˚C) and carefully lower the cannoli forms into the hot oil. Fry until golden on all
sides. Remove from oil and set on paper towel to drain and cool."
},
{
"id": "59",
"recipe_id": "7",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Using a small bowl, cookie cutter, or jar lid, cut into circles (re-rolling the circles and re-cutting if
necessary to reach desired thinness)."
},
{
"id": "60",
"recipe_id": "7",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Remove the cooled pastry and dip ends in melted chocolate and roll in crushed candy canes. Place on wax paper
to set."
},
{
"id": "61",
"recipe_id": "7",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Wrap dough around a lightly greased cannoli form and seal with egg white."
},
{
"id": "62",
"recipe_id": "7",
"appliance": "",
"position": "11",
"temperature": "",
"text": "Before serving, pipe the ricotta mixture into the cannoli. Dust with powdered sugar."
},
{
"id": "63",
"recipe_id": "7",
"appliance": "",
"position": "12",
"temperature": "",
"text": "Enjoy!"
}
]
},
"8": {
"name": "Mocha Nanaimo Bars",
"description": "",
"servings": "9",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/08c57d9c451f4fc488ee23bd2b335608\/BFV14093_NanaimoBars4ways-FB1080SQ.jpg",
"duration": "",
"ingredients": [
{
"id": "67",
"recipe_id": "8",
"name": "butter",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup butter"
},
{
"id": "68",
"recipe_id": "8",
"name": "sugar",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "¼",
"text": "¼ cup sugar"
},
{
"id": "69",
"recipe_id": "8",
"name": "cocoa powder",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "5.0",
"text": "5 tablespoons cocoa powder (you can add 1 tbsp of instant coffee if you want a stronger mocha flavor)"
},
{
"id": "70",
"recipe_id": "8",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 egg, beaten"
},
{
"id": "71",
"recipe_id": "8",
"name": "graham cracker crumbs",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1 ¼",
"text": "1 ¼ cup graham cracker crumbs"
},
{
"id": "72",
"recipe_id": "8",
"name": "sliced almond",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup sliced almonds, chopped"
},
{
"id": "73",
"recipe_id": "8",
"name": "flaked coconut",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ flaked coconuts"
}
],
"instructions": [
{
"id": "64",
"recipe_id": "8",
"appliance": "",
"position": "1",
"temperature": "",
"text": "In a bain-marie, melt the butter, sugar, and cocoa powder."
},
{
"id": "65",
"recipe_id": "8",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Stir in the egg and keep stirring for a minute until the mix thickens."
},
{
"id": "66",
"recipe_id": "8",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Remove the bowl from heat."
},
{
"id": "67",
"recipe_id": "8",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Add the graham cracker crumbs, the almonds (chopped finely), and the coconut flakes."
},
{
"id": "68",
"recipe_id": "8",
"appliance": "",
"position": "5",
"temperature": "",
"text": "When well mixed, pour into an 8x8 inch (20x20 cm) pan and flatten until you get an even layer."
},
{
"id": "69",
"recipe_id": "8",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Cream the custard powder, softened butter, cream, and instant coffee until smooth."
},
{
"id": "70",
"recipe_id": "8",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Add the powdered sugar and mix until smooth."
},
{
"id": "71",
"recipe_id": "8",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Pour mixture on top of the crust and spread it until you get an even layer."
},
{
"id": "72",
"recipe_id": "8",
"appliance": "",
"position": "9",
"temperature": "",
"text": "In a bain marie, slowly melt the chocolate and the butter."
},
{
"id": "73",
"recipe_id": "8",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Cool it down a little bit then pour it over middle layer."
},
{
"id": "74",
"recipe_id": "8",
"appliance": "",
"position": "11",
"temperature": "",
"text": "Chill the bars for at least 3 hours."
},
{
"id": "75",
"recipe_id": "8",
"appliance": "",
"position": "12",
"temperature": "",
"text": "Cut them into 9 even squares and sprinkle each one with cocoa powder."
},
{
"id": "76",
"recipe_id": "8",
"appliance": "",
"position": "13",
"temperature": "",
"text": "Enjoy!"
}
]
},
"9": {
"name": "Mocha French Toast Bake",
"description": "",
"servings": "8",
"thumbnail":
"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/c77dca6543c34c4db95f30388b4915d5\/BFV11103_MochaFrenchToastBake_ThumbC.jpg",
"duration": "",
"ingredients": [
{
"id": "74",
"recipe_id": "9",
"name": "flaky biscuit dough",
"unitName": "tube",
"unitAbbreviation": "tube",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 tubes refrigerated flaky biscuits (16 biscuits)"
},
{
"id": "75",
"recipe_id": "9",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "3.0",
"text": "3 eggs"
},
{
"id": "76",
"recipe_id": "9",
"name": "milk",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup milk"
},
{
"id": "77",
"recipe_id": "9",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon vanilla extract"
},
{
"id": "78",
"recipe_id": "9",
"name": "instant coffee",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 tablespoons instant coffee"
},
{
"id": "79",
"recipe_id": "9",
"name": "chocolate bars",
"unitName": "bar",
"unitAbbreviation": "bar",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 chocolate bars (8.8 oz total)"
},
{
"id": "80",
"recipe_id": "9",
"name": "cooking spray",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "cooking spray"
},
{
"id": "81",
"recipe_id": "9",
"name": "whipped cream",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "0.0",
"text": "n\/a"
},
{
"id": "82",
"recipe_id": "9",
"name": "chocolate syrup",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "375.0",
"text": "n\/a"
}
],
"instructions": [
{
"id": "77",
"recipe_id": "9",
"appliance": "oven",
"position": "1",
"temperature": "350",
"text": "Preheat the oven to 350ºF (180ºC)."
},
{
"id": "78",
"recipe_id": "9",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Cut each biscuit into 4 pieces and place in a large bowl."
},
{
"id": "79",
"recipe_id": "9",
"appliance": "",
"position": "3",
"temperature": "",
"text": "In a separate bowl, whisk the eggs, milk, vanilla extract, and instant coffee until well-blended."
},
{
"id": "80",
"recipe_id": "9",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Pour the liquid mixture over the biscuits and stir to coat."
},
{
"id": "81",
"recipe_id": "9",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Spoon half of the biscuit and liquid mixture into a greased 9-inch (22 cm) square baking dish."
},
{
"id": "82",
"recipe_id": "9",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Place the chocolate bars on top and cover with the remaining half of the biscuit mixture."
},
{
"id": "83",
"recipe_id": "9",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Bake for 25-30 minutes, or until the biscuits are no longer doughy on the inside and there is no more liquid."
},
{
"id": "84",
"recipe_id": "9",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Cool for 10 minutes and serve with a dollop of whipped cream and drizzle of chocolate syrup."
},
{
"id": "85",
"recipe_id": "9",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Enjoy!"
}
]
},
"10": {
"name": "Personal Protein Pot",
"description": "",
"servings": "1",
"thumbnail": "https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/143016.jpg",
"duration": "",
"ingredients": [
{
"id": "83",
"recipe_id": "10",
"name": "garlic",
"unitName": "clove",
"unitAbbreviation": "clove",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 cloves garlic, minced"
},
{
"id": "84",
"recipe_id": "10",
"name": "fresh ginger",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tablespoon minced fresh ginger"
},
{
"id": "85",
"recipe_id": "10",
"name": "sesame oil",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tablespoon sesame oil"
},
{
"id": "86",
"recipe_id": "10",
"name": "honey",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tablespoon honey"
},
{
"id": "87",
"recipe_id": "10",
"name": "soy sauce",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "¼",
"text": "¼ cup soy sauce"
},
{
"id": "88",
"recipe_id": "10",
"name": "chicken breast",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 chicken breast"
},
{
"id": "89",
"recipe_id": "10",
"name": "quinoa",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup quinoa"
},
{
"id": "90",
"recipe_id": "10",
"name": "chicken stock",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1 ½",
"text": "1½ cups chicken stock"
},
{
"id": "91",
"recipe_id": "10",
"name": "sliced carrot",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup sliced carrot"
},
{
"id": "92",
"recipe_id": "10",
"name": "snap pea",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup snap peas"
},
{
"id": "93",
"recipe_id": "10",
"name": "shredded red cabbage",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup shredded red cabbage"
},
{
"id": "94",
"recipe_id": "10",
"name": "bell pepper",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup sliced bell pepper"
},
{
"id": "95",
"recipe_id": "10",
"name": "broccoli floret",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup broccoli florets"
},
{
"id": "96",
"recipe_id": "10",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 egg"
},
{
"id": "97",
"recipe_id": "10",
"name": "salt",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Salt, to taste"
},
{
"id": "98",
"recipe_id": "10",
"name": "avocado",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "½",
"text": "½ avocado, sliced"
},
{
"id": "99",
"recipe_id": "10",
"name": "scallion",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Scallion, sliced, for garnish"
},
{
"id": "100",
"recipe_id": "10",
"name": "toasted sesame seed",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Toasted sesame seeds, for garnish"
}
],
"instructions": [
{
"id": "86",
"recipe_id": "10",
"appliance": "",
"position": "1",
"temperature": "",
"text": "In a small measuring cup, mix together the garlic, ginger, sesame oil, honey, and soy sauce. Whisk to combine."
},
{
"id": "87",
"recipe_id": "10",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Pour about 2 tablespoons of the sauce over the chicken in a small bowl and set the rest aside for serving. Toss
the chicken in the sauce to coat."
},
{
"id": "88",
"recipe_id": "10",
"appliance": "food_thermometer",
"position": "3",
"temperature": "165",
"text": "Heat a tablespoon of oil in a small pot over medium heat. Cook the chicken until golden brown on one side, then
flip and cook the other side until the chicken reaches an internal temperature of at least 165°F (75°C), about 10
minutes total. Remove the chicken breast from the pan. Let rest for 5 minutes, then slice."
},
{
"id": "89",
"recipe_id": "10",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Add the quinoa and chicken stock to the same pot. Stir the quinoa and bring to a boil on high heat. Then,
reduce the heat to low and place a strainer over the simmering quinoa."
},
{
"id": "90",
"recipe_id": "10",
"appliance": "",
"position": "5",
"temperature": "",
"text": "To the strainer, add the carrot, snap peas, red cabbage, bell pepper, broccoli, and the egg. Sprinkle with
salt."
},
{
"id": "91",
"recipe_id": "10",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Cover the pot and cook for 20 minutes."
},
{
"id": "92",
"recipe_id": "10",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Remove the food from the heat, fluff the quinoa and add the chicken and veggies. Top with the sliced avocado
and the cooked egg. Pour on the rest of the reserved sauce, and garnish with scallions and toasted sesame seeds."
},
{
"id": "93",
"recipe_id": "10",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Enjoy!"
}
]
},
"11": {
"name": "Banana Oatmeal Muffins",
"description": "",
"servings": "12",
"thumbnail": "https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/f3784e8df87b4833aa686afcb1be0ab8\/Thumb_A.jpg",
"duration": "",
"ingredients": [
{
"id": "101",
"recipe_id": "11",
"name": "banana",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 bananas"
},
{
"id": "102",
"recipe_id": "11",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 eggs"
},
{
"id": "103",
"recipe_id": "11",
"name": "maple syrup",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "⅓",
"text": "⅓ cup maple syrup"
},
{
"id": "104",
"recipe_id": "11",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "¼",
"text": "¼ teaspoon salt"
},
{
"id": "105",
"recipe_id": "11",
"name": "baking powder",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoons baking powder"
},
{
"id": "106",
"recipe_id": "11",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoons vanilla extract"
},
{
"id": "107",
"recipe_id": "11",
"name": "cinnamon",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tablespoon cinnamon"
},
{
"id": "108",
"recipe_id": "11",
"name": "greek yogurt",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup Greek yogurt"
},
{
"id": "109",
"recipe_id": "11",
"name": "oats",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "3.0",
"text": "3 cups oats"
},
{
"id": "110",
"recipe_id": "11",
"name": "whole milk",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 cup whole milk"
},
{
"id": "111",
"recipe_id": "11",
"name": "topping of your choice",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Optional: preferred toppings (dried cranberries, apples, blueberries, nuts)"
}
],
"instructions": [
{
"id": "94",
"recipe_id": "11",
"appliance": "oven",
"position": "1",
"temperature": "350",
"text": "Preheat the oven to 350˚F (180˚C)."
},
{
"id": "95",
"recipe_id": "11",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a medium bowl, mash bananas. Mix eggs, maple syrup, salt, baking powder, vanilla extract, cinnamon, and
Greek yogurt into mixture."
},
{
"id": "96",
"recipe_id": "11",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add oats and milk, and mix. Let the mixture sit for a few minutes, so the oats soak up the liquid and the
consistency is like oatmeal."
},
{
"id": "97",
"recipe_id": "11",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Line muffin tins with muffin liners. Pour the mixture into each muffin cup about ¾ full. Add your preferred
toppings and gently push your toppings into each muffin cup."
},
{
"id": "98",
"recipe_id": "11",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Bake for 30 minutes."
},
{
"id": "99",
"recipe_id": "11",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Let cool for 5 minutes before eating. Once cool, you can also store in an airtight container or freeze in a
storage bag."
},
{
"id": "100",
"recipe_id": "11",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy!"
}
]
},
"12": {
"name": "Low-Carb Egg White Omelette",
"description": "",
"servings": "4",
"thumbnail": "https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/126393.jpg",
"duration": "",
"ingredients": [
{
"id": "112",
"recipe_id": "12",
"name": "lime",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "½",
"text": "Juice of ½ lime"
},
{
"id": "113",
"recipe_id": "12",
"name": "water",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "⅔",
"text": "⅔ cup water"
},
{
"id": "114",
"recipe_id": "12",
"name": "avocado",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 avocado, diced"
},
{
"id": "115",
"recipe_id": "12",
"name": "greek yogurt",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "½",
"text": "½ cup Greek yogurt"
},
{
"id": "116",
"recipe_id": "12",
"name": "salt",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Salt, to taste"
},
{
"id": "117",
"recipe_id": "12",
"name": "black pepper",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Black pepper, to taste"
}
],
"instructions": [
{
"id": "101",
"recipe_id": "12",
"appliance": "",
"position": "1",
"temperature": "",
"text": "Place the lime juice, water, avocado, Greek yogurt, salt, and pepper in a blender and blend until smooth. Set
aside."
},
{
"id": "102",
"recipe_id": "12",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Add oil to a pan over medium heat."
},
{
"id": "103",
"recipe_id": "12",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add onions and peppers and cook until nearly soft, about 5 minutes."
},
{
"id": "104",
"recipe_id": "12",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Add spinach and cheese and stir for another 2 to 3 minutes. Set aside."
},
{
"id": "105",
"recipe_id": "12",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Add oil to a pan over medium heat."
},
{
"id": "106",
"recipe_id": "12",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Add the egg whites to the pan and season with salt and pepper. Cook until set, about 2 minutes."
},
{
"id": "107",
"recipe_id": "12",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Flip the eggs and let set for about 1 minute."
},
{
"id": "108",
"recipe_id": "12",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Fill the egg whites with the pepper, onion, spinach, and cheese mixture. Roll up the egg white omelette."
},
{
"id": "109",
"recipe_id": "12",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Top with avocado dressing, tomato, and cilantro."
},
{
"id": "110",
"recipe_id": "12",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Enjoy!"
}
]
},
"13": {
"name": "Banana Cornbread Pancakes",
"description": "",
"servings": "8",
"thumbnail": "https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/160036.jpg",
"duration": "",
"ingredients": [
{
"id": "118",
"recipe_id": "13",
"name": "banana",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "3.0",
"text": "3 bananas"
},
{
"id": "119",
"recipe_id": "13",
"name": "granulated sugar",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "65.0",
"text": "⅓ cup granulated sugar"
},
{
"id": "120",
"recipe_id": "13",
"name": "brown sugar",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 tablespoon brown sugar"
},
{
"id": "121",
"recipe_id": "13",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoons vanilla extract"
},
{
"id": "122",
"recipe_id": "13",
"name": "milk",
"unitName": "milliliter",
"unitAbbreviation": "mL",
"unitSystem": "metric",
"quantity": "360.0",
"text": "1½ cups milk"
},
{
"id": "123",
"recipe_id": "13",
"name": "cornmeal",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "250.0",
"text": "2 cups cornmeal"
},
{
"id": "124",
"recipe_id": "13",
"name": "salt",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon salt"
},
{
"id": "125",
"recipe_id": "13",
"name": "baking powder",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoons baking powder"
},
{
"id": "126",
"recipe_id": "13",
"name": "cinnamon",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "2 teaspoons cinnamon"
},
{
"id": "127",
"recipe_id": "13",
"name": "butter",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon butter, for griddling"
},
{
"id": "128",
"recipe_id": "13",
"name": "butter",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Butter, for serving"
},
{
"id": "129",
"recipe_id": "13",
"name": "honey",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Honey, for serving"
}
],
"instructions": [
{
"id": "111",
"recipe_id": "13",
"appliance": "",
"position": "1",
"temperature": "",
"text": "In a large bowl, mash the bananas. Add the granulated sugar, brown sugar, and vanilla and whisk until evenly
incorporated."
},
{
"id": "112",
"recipe_id": "13",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Add the milk and whisk to combine."
},
{
"id": "113",
"recipe_id": "13",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Sift in the cornmeal, salt, baking powder, and cinnamon and whisk until fully incorporated."
},
{
"id": "114",
"recipe_id": "13",
"appliance": "",
"position": "4",
"temperature": "",
"text": "In a medium pan over medium heat, melt the butter and add ⅓ cup (40 g) of pancake batter."
},
{
"id": "115",
"recipe_id": "13",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Cook for 3-5 minutes, or until lightly golden brown, then flip. Cook for 2-3 minutes more on the other side,
then remove from the pan. Repeat with the remaining batter."
},
{
"id": "116",
"recipe_id": "13",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Serve with honey and butter."
},
{
"id": "117",
"recipe_id": "13",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy!"
}
]
},
"14": {
"name": "Egg Breakfast Cups",
"description": "",
"servings": "6",
"thumbnail":
"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/d173fe0e773a4bd28548f080b3bc48be\/BFV16169_EggBreakfastCupsThumb.jpg",
"duration": "",
"ingredients": [
{
"id": "130",
"recipe_id": "14",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "5.0",
"text": "5 eggs"
},
{
"id": "131",
"recipe_id": "14",
"name": "salt",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Salt, to taste"
},
{
"id": "132",
"recipe_id": "14",
"name": "pepper",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "0.0",
"text": "Pepper, to taste"
}
],
"instructions": [
{
"id": "118",
"recipe_id": "14",
"appliance": "oven",
"position": "1",
"temperature": "350",
"text": "Preheat oven to 350°F (180°C)."
},
{
"id": "119",
"recipe_id": "14",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a measuring cup, beat the eggs until smooth. Set aside."
},
{
"id": "120",
"recipe_id": "14",
"appliance": "",
"position": "3",
"temperature": "",
"text": "In a greased muffin tin, place your desired combination of fillings into each muffin cup."
},
{
"id": "121",
"recipe_id": "14",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Season each cup with salt and pepper."
},
{
"id": "122",
"recipe_id": "14",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Pour the beaten eggs into each muffin cup until the liquid almost reaches the top."
},
{
"id": "123",
"recipe_id": "14",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Bake for 20 minutes, until set."
},
{
"id": "124",
"recipe_id": "14",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy!"
}
]
},
"15": {
"name": "Cloud Bread",
"description": "",
"servings": "3",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/ee9f5904ce33444182bb12e2dce0b005\/Tasty_-_Facebook_-_1080x1080.jpg",
"duration": "",
"ingredients": [
{
"id": "133",
"recipe_id": "15",
"name": "egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "3.0",
"text": "* 3 eggs, separated"
},
{
"id": "134",
"recipe_id": "15",
"name": "cream of tartar",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "⅛",
"text": "* ⅛ teaspoon cream of tartar"
},
{
"id": "135",
"recipe_id": "15",
"name": "cream cheese",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "3.0",
"text": "* 3 tablespoons softened cream cheese or Greek yogurt"
}
],
"instructions": [
{
"id": "125",
"recipe_id": "15",
"appliance": "oven",
"position": "1",
"temperature": "300",
"text": "Preheat oven to 300°F (150°C)."
},
{
"id": "126",
"recipe_id": "15",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Separate the eggs into two bowls."
},
{
"id": "127",
"recipe_id": "15",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add the cream of tartar to the egg whites and whip into stiff peaks."
},
{
"id": "128",
"recipe_id": "15",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Add the cream cheese or yogurt into the yolks and mix until combined."
},
{
"id": "129",
"recipe_id": "15",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Fold half of the egg whites into the yolks until just combined. Add the rest and fold again until
incorporated."
},
{
"id": "130",
"recipe_id": "15",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Line a baking sheet with parchment paper and place six dollops of the mixture on the tray."
},
{
"id": "131",
"recipe_id": "15",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Spread out the circles with a spatula to about ½ inch (1 cm) thick."
},
{
"id": "132",
"recipe_id": "15",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Bake for 30 minutes or until golden."
},
{
"id": "133",
"recipe_id": "15",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Allow to cool for at least 1 hour."
},
{
"id": "134",
"recipe_id": "15",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Enjoy!"
}
]
},
"16": {
"name": "Pizza Bread Bowl",
"description": "",
"servings": "6",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/a7a07d09f65143eca34c5078afdc8e2b\/bFV8523_Pizza_Bread_Bowl-FB1080.jpg",
"duration": "",
"ingredients": [
{
"id": "136",
"recipe_id": "16",
"name": "bread boule",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 bread boule"
},
{
"id": "137",
"recipe_id": "16",
"name": "marinara sauce",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "260.0",
"text": "1 cup marinara sauce"
},
{
"id": "138",
"recipe_id": "16",
"name": "fresh mozzarella cheese",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "225.0",
"text": "8 oz fresh mozzarella"
},
{
"id": "139",
"recipe_id": "16",
"name": "pepperoni",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "170.0",
"text": "6 oz pepperoni"
},
{
"id": "140",
"recipe_id": "16",
"name": "onion",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "½",
"text": "½ onion, sliced"
},
{
"id": "141",
"recipe_id": "16",
"name": "fresh basil",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "20.0",
"text": "½ cup basil"
},
{
"id": "142",
"recipe_id": "16",
"name": "sausage",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "140.0",
"text": "1 cup cooked sausage"
},
{
"id": "143",
"recipe_id": "16",
"name": "green bell pepper",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 green bell pepper, sliced"
},
{
"id": "144",
"recipe_id": "16",
"name": "white cheddar cheese",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "100.0",
"text": "1 cup white cheddar, shredded"
}
],
"instructions": [
{
"id": "135",
"recipe_id": "16",
"appliance": "",
"position": "1",
"temperature": "",
"text": "Slice the top of the bread boule off and remove the insides."
},
{
"id": "136",
"recipe_id": "16",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Spread ½ cup (130 G) of the marinara on the bottom of the boule, then layer with half of the mozzarella, 5
ounces (140 G) of the pepperoni, onions, basil, sausage, peppers, the other ½ cup (130 G) of marinara, the remaining
mozzarella, and half of the white cheddar, and place the cap of the bread boule on top."
},
{
"id": "137",
"recipe_id": "16",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Wrap the bread bowl in foil, then press with a heavy object for 30 minutes."
},
{
"id": "138",
"recipe_id": "16",
"appliance": "oven",
"position": "4",
"temperature": "350",
"text": "Preheat oven to 350°F (175˚C)."
},
{
"id": "139",
"recipe_id": "16",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Remove the foil and sprinkle the remaining cheddar and pepperoni on top. Bake for 30 minutes, until cheese is
golden brown."
},
{
"id": "140",
"recipe_id": "16",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Cool for 10 minutes and slice."
},
{
"id": "141",
"recipe_id": "16",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy! "
}
]
},
"17": {
"name": "Cheesecake-filled Banana Bread",
"description": "",
"servings": "10",
"thumbnail": "https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/51466.jpg",
"duration": "",
"ingredients": [
{
"id": "145",
"recipe_id": "17",
"name": "ripe banana",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "2.0",
"text": "2 ripe bananas"
},
{
"id": "146",
"recipe_id": "17",
"name": "large egg",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 large egg, beaten"
},
{
"id": "147",
"recipe_id": "17",
"name": "light brown sugar",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "110.0",
"text": "½ cup light brown sugar"
},
{
"id": "148",
"recipe_id": "17",
"name": "granulated sugar",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "50.0",
"text": "¼ cup granulated sugar"
},
{
"id": "149",
"recipe_id": "17",
"name": "butter",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "8.0",
"text": "½ cup butter, softened"
},
{
"id": "150",
"recipe_id": "17",
"name": "vanilla extract",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon vanilla extract"
},
{
"id": "151",
"recipe_id": "17",
"name": "greek yogurt",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "60.0",
"text": "¼ cup Greek yogurt"
},
{
"id": "152",
"recipe_id": "17",
"name": "all-purpose flour",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "125.0",
"text": "1 cup all-purpose flour"
},
{
"id": "153",
"recipe_id": "17",
"name": "salt",
"unitName": "pinch",
"unitAbbreviation": "pinch",
"unitSystem": "none",
"quantity": "1.0",
"text": "Pinch of salt"
},
{
"id": "154",
"recipe_id": "17",
"name": "baking soda",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "1.0",
"text": "1 teaspoon baking soda"
}
],
"instructions": [
{
"id": "142",
"recipe_id": "17",
"appliance": "oven",
"position": "1",
"temperature": "350",
"text": "Preheat the oven to 350˚F (180˚C)."
},
{
"id": "143",
"recipe_id": "17",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a medium bowl, mash bananas. Mix eggs, brown sugar, white sugar, butter, vanilla extract, and yogurt into
the mixture."
},
{
"id": "144",
"recipe_id": "17",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Add flour, salt, and baking soda and mix until well combined."
},
{
"id": "145",
"recipe_id": "17",
"appliance": "",
"position": "4",
"temperature": "",
"text": "To prepare the cream cheese filling, mix egg, cream cheese, sugar, and flour in a small bowl."
},
{
"id": "146",
"recipe_id": "17",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Pour half the banana batter into a greased 9x5-inch (23x12 cm) bread pan."
},
{
"id": "147",
"recipe_id": "17",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Pour cream cheese filling evenly over the banana batter. Pour the remaining banana batter on top of the cream
cheese filling."
},
{
"id": "148",
"recipe_id": "17",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Bake for about 50 minutes, or until a toothpick comes out clean from the middle of the bread. (Baking times may
vary, so keep an eye on the bread.)"
},
{
"id": "149",
"recipe_id": "17",
"appliance": "",
"position": "8",
"temperature": "",
"text": "Allow to cool for 15 minutes before serving."
},
{
"id": "150",
"recipe_id": "17",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Enjoy!"
}
]
},
"18": {
"name": "3 Cheese Garlic Bread",
"description": "",
"servings": "2",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/6e6292525051459ea04905ce883c96f2\/BFV16420_LobsterDinnerForTwo2.jpg",
"duration": "",
"ingredients": [
{
"id": "155",
"recipe_id": "18",
"name": "butter",
"unitName": "stick",
"unitAbbreviation": "stick",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 stick butter, softened"
},
{
"id": "156",
"recipe_id": "18",
"name": "garlic",
"unitName": "clove",
"unitAbbreviation": "clove",
"unitSystem": "none",
"quantity": "4.0",
"text": "4 cloves garlic, minced"
},
{
"id": "157",
"recipe_id": "18",
"name": "parmesan cheese",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "⅓",
"text": "⅓ cup parmesan cheese"
},
{
"id": "158",
"recipe_id": "18",
"name": "shredded monterey jack cheese",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "35.0",
"text": "⅓ cup Monterey Jack cheese, shredded"
},
{
"id": "159",
"recipe_id": "18",
"name": "shredded cheddar cheese",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "⅓",
"text": "⅓ cup cheddar cheese, shredded"
},
{
"id": "160",
"recipe_id": "18",
"name": "fresh green onion",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "50.0",
"text": "⅓ cup green onions, sliced"
},
{
"id": "161",
"recipe_id": "18",
"name": "baguette",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 8-inch baguette"
}
],
"instructions": [
{
"id": "151",
"recipe_id": "18",
"appliance": "oven",
"position": "1",
"temperature": "400",
"text": "Preheat oven to 400°F (200°C)."
},
{
"id": "152",
"recipe_id": "18",
"appliance": "",
"position": "2",
"temperature": "",
"text": "In a bowl, combine all of the ingredients except the baguette, and mix until smooth."
},
{
"id": "153",
"recipe_id": "18",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Slice the baguette in half lengthwise, then spread the butter mixture evenly on both sides of the baguette."
},
{
"id": "154",
"recipe_id": "18",
"appliance": "",
"position": "4",
"temperature": "",
"text": "Place on a tray lined with parchment paper and bake for about 15 minutes, until cheese is bubbly and starting
to brown on the edges."
},
{
"id": "155",
"recipe_id": "18",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Slice, cool, then serve."
},
{
"id": "156",
"recipe_id": "18",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Enjoy!"
}
]
},
"19": {
"name": "How To Make Homemade Sourdough Bread",
"description": "",
"servings": "8",
"thumbnail": "https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/dffd29bd9d394a8c8b0770c61dc0c079\/FB.jpg",
"duration": "",
"ingredients": [
{
"id": "162",
"recipe_id": "19",
"name": "warm water",
"unitName": "milliliter",
"unitAbbreviation": "mL",
"unitSystem": "metric",
"quantity": "480.0",
"text": "2 cups warm water"
},
{
"id": "163",
"recipe_id": "19",
"name": "active dry yeast",
"unitName": "teaspoon",
"unitAbbreviation": "tsp",
"unitSystem": "imperial",
"quantity": "2 ¼",
"text": "1¼ teaspoon (1 packet) dry yeast"
},
{
"id": "164",
"recipe_id": "19",
"name": "flour",
"unitName": "gram",
"unitAbbreviation": "g",
"unitSystem": "metric",
"quantity": "440.0",
"text": "3½ cups flour"
},
{
"id": "165",
"recipe_id": "19",
"name": "sugar",
"unitName": "tablespoon",
"unitAbbreviation": "tbsp",
"unitSystem": "imperial",
"quantity": "2.0",
"text": "1 tablespoon sugar"
}
],
"instructions": [
{
"id": "157",
"recipe_id": "19",
"appliance": "",
"position": "1",
"temperature": "",
"text": "In a glass bowl, add water and yeast. Mix the yeast into the water and let it sit for a couple minutes."
},
{
"id": "158",
"recipe_id": "19",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Add in the rest of the ingredients for the starter. Mix well until everything is fully incorporated."
},
{
"id": "159",
"recipe_id": "19",
"appliance": "",
"position": "3",
"temperature": "",
"text": "Wrap the bowl with clear wrap, making sure not to tightly seal the bowl. Let the starter breathe a little and
keep it in a dark place at room temperature. Stir every 12 hours until making the dough. The starter will rise and
shrink each day and you should see bubbles, letting you know that the yeast is being activated!"
},
{
"id": "160",
"recipe_id": "19",
"appliance": "",
"position": "4",
"temperature": "",
"text": "On day 5, combine all ingredients into a bowl, and knead for 10 minutes on low if using a machine; if kneading
by hand, knead for 20 minutes until dough is stretchy yet doesn’t stick to your hands."
},
{
"id": "161",
"recipe_id": "19",
"appliance": "",
"position": "5",
"temperature": "",
"text": "While the dough is kneading, store your starter for future use. Your starter will last forever as long as you
maintain and care for it. It can stay in the fridge and be fed once a week with a teaspoon of sugar. To replenish your
starter, simply add 1 cup of flour (125g) and ½ cup of water (120ml), mix, and place it back in the fridge. Leave it out
overnight to get to room temperature before preparing the dough."
},
{
"id": "162",
"recipe_id": "19",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Place kneaded dough into a large floured bowl with a towel over the top, then sprinkle flour and let it rise
for 12 hours."
},
{
"id": "163",
"recipe_id": "19",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Place risen dough onto a floured board and knead for a few minutes. Place it into a floured proofing basket or
a medium bowl, sprinkle flour and let it rise for another 4 hours."
},
{
"id": "164",
"recipe_id": "19",
"appliance": "oven",
"position": "8",
"temperature": "480",
"text": "Preheat oven to 480°F (250°C)."
},
{
"id": "165",
"recipe_id": "19",
"appliance": "",
"position": "9",
"temperature": "",
"text": "Flip the dough onto a parchment paper, and transfer the dough and paper into a large cast-iron dutch oven."
},
{
"id": "166",
"recipe_id": "19",
"appliance": "",
"position": "10",
"temperature": "",
"text": "Score the top of the bread."
},
{
"id": "167",
"recipe_id": "19",
"appliance": "",
"position": "11",
"temperature": "",
"text": "Place the lid on top and bake for 30 minutes."
},
{
"id": "168",
"recipe_id": "19",
"appliance": "",
"position": "12",
"temperature": "",
"text": "Take the lid off and bake for another 15 minutes or until the crust is golden brown."
},
{
"id": "169",
"recipe_id": "19",
"appliance": "",
"position": "13",
"temperature": "",
"text": "Transfer onto a cooling rack and let it rest for an hour. Knock the bottom of the bread to listen for a hollow
knock."
},
{
"id": "170",
"recipe_id": "19",
"appliance": "",
"position": "14",
"temperature": "",
"text": "Nutrition Calories: 1615 Fat: 4 grams Carbs: 340 grams Fiber: 11 grams Sugars: 19 grams Protein: 42 grams"
},
{
"id": "171",
"recipe_id": "19",
"appliance": "",
"position": "15",
"temperature": "",
"text": "Enjoy!"
}
]
},
"20": {
"name": "Watermelon Salad With Arugula And Feta",
"description": "",
"servings": "6",
"thumbnail":
"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/813beaadf012447988cb4f3f564a9260\/BFV43452_WatermelonSalads3Ways-FB.jpg",
"duration": "",
"ingredients": [
{
"id": "166",
"recipe_id": "20",
"name": "small watermelon",
"unitName": "",
"unitAbbreviation": "",
"unitSystem": "none",
"quantity": "1.0",
"text": "1 small watermelon"
},
{
"id": "167",
"recipe_id": "20",
"name": "fresh arugula",
"unitName": "cup",
"unitAbbreviation": "c",
"unitSystem": "imperial",
"quantity": "3.0",
"text": "3 cups arugula"
},
{
"id": "168",
"recipe_id": "20",
"name": "feta cheese",
"unitName": "ounce",
"unitAbbreviation": "oz",
"unitSystem": "imperial",
"quantity": "4.0",
"text": "4 ounces feta cheese, crumbled"
}
],
"instructions": [
{
"id": "172",
"recipe_id": "20",
"appliance": "",
"position": "1",
"temperature": "",
"text": "Using a sharp knife, cut off the top and bottom of the watermelon to reveal the red flesh and create flat
surfaces on both sides. Stand the watermelon upright, and slice off the remaining peel so only the red core remains."
},
{
"id": "173",
"recipe_id": "20",
"appliance": "",
"position": "2",
"temperature": "",
"text": "Cut the watermelon into roughly 1-inch (2 cm) cubes and transfer to a large bowl."
},
{
"id": "174",
"recipe_id": "20",
"appliance": "",
"position": "3",
"temperature": "",
"text": "In a small bowl, whisk together the lime juice, water, honey, and salt."
},
{
"id": "175",
"recipe_id": "20",
"appliance": "",
"position": "4",
"temperature": "",
"text": "While whisking, gradually add the oil in a very slow, steady stream to create an emulsification. Set aside."
},
{
"id": "176",
"recipe_id": "20",
"appliance": "",
"position": "5",
"temperature": "",
"text": "Add the arugula, feta, and honey lime dressing to the large bowl with the watermelon."
},
{
"id": "177",
"recipe_id": "20",
"appliance": "",
"position": "6",
"temperature": "",
"text": "Toss the salad until well-combined, then divide between serving bowls."
},
{
"id": "178",
"recipe_id": "20",
"appliance": "",
"position": "7",
"temperature": "",
"text": "Enjoy!"
}
]
}
}';

    public function testFetchRecipes(): void
    {
        $mockedClass = $this->createMock(RecipeModel::class);
        $mockedClass->method('fetchRecipes')
            ->willReturn($this->returnedRecipesString);
        $this->assertEquals($this->returnedRecipesString, $mockedClass->fetchRecipes());
    }
}