<!DOCTYPE html>
<html>
    <head>
        <script src="foodmenu.js"></script>
        <title>Food Menu</title>
        <link rel="stylesheet" type="text/css" href="FoodMenuStyle.css">
    </head>
    <body>
        <h1>CHOOSE YOUR DISH</h1>
        <div id="tiffins">
            <h2>TIFFINS:</h2>
            <table>
                <tr>
                    <th>ITEM</th>
                    <th>COST</th>
                    <th>QUANTITY</th>
                </tr>
                <tr>
                    <td class="item-name" id="idli">Idli <br><img src="Images/Idli.jpg" alt="Idli"></td>
                    <td id="idli-cost">25/-</td>
                    <td>
                        <button onclick="decrement('idli-qty','idli-cost','idli')">-</button>
                            <span id="idli-qty">0</span>
                        <button onclick="increment('idli-qty','idli-cost','idli')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="wada">Wada <br><img src="Images/Wada.jpg" alt="Wada"></td>
                    <td id="wada-cost">25/-</td>
                    <td>
                        <button onclick="decrement('wada-qty','wada-cost','wada')">-</button>
                            <span id="wada-qty">0</span>
                        <button onclick="increment('wada-qty','wada-cost','wada')">+</button>
                    </td>
                </tr>
                                             
                <tr>
                    <td class="item-name" id='puri'>Puri <br><img src="Images/Puri.jpg" alt="Puri"></td>
                    <td id="puri-cost">25/-</td>
                    <td>
                        <button onclick="decrement('puri-qty','puri-cost','puri')">-</button>
                            <span id="puri-qty">0</span>
                        <button onclick="increment('puri-qty','puri-cost','puri')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="dosa">Dosa <br><img src="Images/Dosa.jpg" alt="Dosa"></td>
                    <td id="dosa-cost">25/-</td>
                    <td>
                        <button onclick="decrement('dosa-qty','dosa-cost','dosa')">-</button>
                            <span id="dosa-qty">0</span>
                        <button onclick="increment('dosa-qty','dosa-cost','dosa')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="bonda">Bonda <br><img src="Images/Bonda.jpg" alt="Bonda"></td>
                    <td id="bonda-cost">25/-</td>
                    <td>
                        <button onclick="decrement('bonda-qty','bonda-cost','bonda')">-</button>
                            <span id="bonda-qty">0</span>
                        <button onclick="increment('bonda-qty','bonda-cost','bonda')">+</button>
                    </td>
                </tr>
            </table>
        </div>
        <div id="Lunch">
            <h2>LUNCH MENU</h2>
            <table>
                <tr>
                    <th>ITEM</th>
                    <th>COST</th>
                    <th>QUANTITY</th>
                </tr>
                <tr>
                    <td class="item-name" id="chickenbiryani">Chicken Biryani <br><img src="Images/ChickenBiryani.jpg" alt="ChickenBiryani"></td>
                    <td id="chickenbiryani-cost">130/-</td>
                    <td>
                        <button onclick="decrement('chknbr-qty','chickenbiryani-cost','chickenbiryani')">-</button>
                            <span id="chknbr-qty">0</span>
                        <button onclick="increment('chknbr-qty','chickenbiryani-cost','chickenbiryani')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="vegbiryani">Veg Biryani <br><img src="Images/VegBiryani.jpg" alt="VegBiryani"></td>
                    <td id="vegbiryani-cost">100/-</td>
                    <td>
                        <button onclick="decrement('vegbiryani-qty','vegbiryani-cost','vegbiryani')">-</button>
                            <span id="vegbiryani-qty">0</span>
                        <button onclick="increment('vegbiryani-qty','vegbiryani-cost','vegbiryani')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="vegfriedrice">Veg Fried Rice <br><img src="Images/VegFriedRice.jpg" alt="VegFriedRice"></td>
                    <td id="vegfriedrice-cost">40/-</td>
                    <td>
                            <button onclick="decrement('vegfr-qty','vegfriedrice-cost','vegfriedrice')">-</button>
                            <span id="vegfr-qty">0</span>
                        <button onclick="increment('vegfr-qty','vegfriedrice-cost','vegfriedrice')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="Vegmanchurian">Veg Manchuria <br><img src="Images/VegManchuria.jpg" alt="VegManchuria"></td>
                    <td id="vegmanchuria-cost">40/-</td>
                    <td>
                        <button onclick="decrement('vegm-qty','vegmanchuria-cost','Vegmanchuria')">-</button>
                            <span id="vegm-qty">0</span>
                        <button onclick="increment('vegm-qty','vegmanchuria-cost','Vegmanchuria')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="chickenfriedrice">Chicken Fried Rice <br><img src="Images/ChickenFriedRice.jpg" alt="ChickenFriedRice"></td>
                    <td id="chickenfriedrice-cost">60/-</td>
                    <td>
                        <button onclick="decrement('chkfr-qty','chickenfriedrice-cost','chickenfriedrice')">-</button>
                            <span id="chkfr-qty">0</span>
                        <button onclick="increment('chkfr-qty','chickenfriedrice-cost','chickenfriedrice')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="chickennoodles">Chicken Noodles <br><img src="Images/ChickenNoodles.jpg" alt="ChickenNoodles"></td>
                    <td id="chickennoodles-cost">60/-</td>
                    <td>
                        <button onclick="decrement('chkn-qty','chickennoodles-cost','chickennoodles')">-</button>
                            <span id="chkn-qty">0</span>
                        <button onclick="increment('chkn-qty','chickennoodles-cost','chickennoodles')">+</button>
                    </td>
                </tr>
                <tr>
                    <td  class="item-name" id="manchurianrice">Manchurian Rice <br><img src="Images/ManchurianRice.jpg" alt="ManchurianRice"></td>
                    <td id="manchurianrice-cost">50/-</td>
                    <td>
                        <button onclick="decrement('manrc-qty','manchurianrice-cost','manchurianrice')">-</button>
                            <span id="manrc-qty">0</span>
                        <button onclick="increment('manrc-qty','manchurianrice-cost','manchurianrice')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="manchuriannoodles">Manchurian Noodles <br><img src="Images/ManchurianNoodles.jpg" alt="ManchurianNoodles"></td>
                    <td id="manchuriannoodles-cost">50/-</td>
                    <td>
                    <button onclick="decrement('mno-qty','manchuriannoodles-cost','manchuriannoodles')">-</button>
                        <span id="mno-qty">0</span>
                    <button onclick="increment('mno-qty','manchuriannoodles-cost','manchuriannoodles')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="vegnoodles">Veg Noodles <br><img src="Images/VegNoodles.jpg" alt="VegNoodles"></td>
                    <td id="vegnoodles-cost">40/-</td>
                    <td>
                        <button onclick="decrement('vegn-qty','vegnoodles-cost','Vegnoodles')">-</button>
                            <span id="vegn-qty">0</span>
                        <button onclick="increment('vegn-qty','vegnoodles-cost','Vegnoodles')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="eggnoodles">Egg Noodles <br><img src="Images/EggNoodles.jpg" alt="EggNoodles"></td>
                    <td id="eggnoodles-cost">50/-</td>
                    <td>
                        <button onclick="decrement('eggn-qty')">-</button>
                            <span id="eggn-qty">0</span>
                        <button onclick="increment('eggn-qty')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="eggfriedrice">Egg Fried Rice <br><img src="Images/EggFriedRice.jpg" alt="EggFriedRice"></td>
                    <td id="eggfriedrice-cost">50/-</td>
                    <td>
                        <button onclick="decrement('eggfr-qty','eggfriedrice-cost','eggfriedrice')">-</button>
                            <span id="eggfr-qty">0</span>
                        <button onclick="increment('eggfr-qty','eggfriedrice-cost','eggfriedrice')">+</button>
                    </td>
                </tr>
                <tr>
                    <td class="item-name" id="meals">Meals <br><img src="Images/Meals.jpg" alt="Meals"></td>
                    <td id="meals-cost">50/-</td>
                    <td>
                    <button onclick="decrement('meals-qty','meals-cost','meals')">-</button>
                        <span id="meals-qty">0</span>
                    <button onclick="increment('meals-qty','meals-cost','meals')">+</button>
                </td>
                </tr>
                <tr>
                    <td class="item-name" id="coke">Coke <br><img src="Images/Coke.jpg" alt="Coke"></td>
                    <td id="coke-cost">20/-</td>
                    <td>
                        <button onclick="decrement('coke-qty','coke-cost','coke')">-</button>
                            <span id="coke-qty">0</span>
                        <button onclick="increment('coke-qty','coke-cost','coke')">+</button>
                    </td>
                </tr>
                                    
            </table>
            <p align="center">
<button type="button" style="background-color:green;margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%" onclick="cost()">Proceed</button>
     </p>


        </div>
    </body>
</html>