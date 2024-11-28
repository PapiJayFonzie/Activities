<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <div class="container">
        <h2>Vendo Machine</h2>
        <form method="POST">

            <fieldset class="fset">
                <legend>Products:</legend>             
                <input type="checkbox" name="products[]" value="Coke,10"> Coke - ₱10<br>
                <input type="checkbox" name="products[]" value="Pepsi,15"> Pepsi - ₱15<br>
                <input type="checkbox" name="products[]" value="Mountain Dew,12"> Mountain Dew - ₱12<br>
                <input type="checkbox" name="products[]" value="Sprite,15"> Sprite - ₱15<br>
                <input type="checkbox" name="products[]" value="Dr Pepper,20"> Dr Pepper - ₱20<br>
            </fieldset>

            <fieldset class="fset">
                <legend>Options:</legend>
                <label for="size">Size: </label>
                <select name="size">
                    <option value="Regular,0">Regular</option>
                    <option value="Upsize,5">Upsize (add ₱5)</option>
                    <option value="Jumbo,10">Jumbo (add ₱10)</option>
                </select>

                <label for="quantity">Quantity: </label>
                <input type="number" name="quantity" id="quantity" value="0" min="0">
                <button type="submit" name="checkout">CheckOut</button>
            </fieldset>
        </form>
       
    </div>
</body>
</html>
