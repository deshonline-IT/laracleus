## Laravel Ecommerce Package

A simple ecommerce package implementation for Laravel.

## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:
	
	composer require laramaster/nuclues

Now you're ready to start using the shoppingcart in your application.

## Usage

First you need set up laravel default authentication in your application

This package has configuration files which can be configured to your needs.

Deploy the prooph config files to add your configuration for the prooph components.

	php artisan vendor:publish --tag=public

Then you need migrate some table.

	php artisan migrate

The shoppingcart gives you the following methods to use:

### Product::get()

Of course you also want to get the product content. This is where you'll use the `get` method. This method will return a Collection of ProductsItems which you can iterate over and show the content to your customers.

	Product::get()

Suppose you want to get latest,oldest,featured,best selling,related products. So you can pass parameter in this method.

	Product::get('latest') //Will get latest product
	Product::get('oldest') //will get oldest product
	Product::get('featured') //will get featured product
	Product::get('best_selling') //will get best selling product
	Product::get('random') //will get random product

Now you want to get 5 or 3 latest,oldest,featured,best_selling,random product then you can use in this method.

	Product::get('latest',3) //will get latest 3 product
	Product::get('oldest',5) //will get oldest 5 product
	Product::get('featured',7) //will get featured 7 product
	Product::get('best_selling',12) //will get best_selling 12 product
	Product::get('random',15) //will get random 15 product

### Products::details('product 1')

Now you want to get single product. So,you can use in this method. And you must be pass product subtitle not product id.
	
	Products::details($product->subtitle)

### Product::pre_next(1)

If you use this method you can get previous and next product. You need pass product id in this method.

	Product::pre_next($product->id)

### Product::bycategory('categoryId',2)

If you want to get product by category then you can use this method. 

	Product::bycategory('categoryId',5) //First parameter will be your category id and second parameter will be how many product you want to get.  

### Product::bysubcategory('subcategoryId',2)

If you want to get product by subcategory then you can use this method. 

	Product::bysubcategory('subcategoryId',5) //First parameter will be your subcategory id and second parameter will be how many product you want to get.  

### Cart::get()

You can use this method for get your cart item.

	Cart::get()

### Cart::add('product id','product name','product price','product qty')

You can use this method for add product in your cart

	Cart::add(1,'product 1',100.00,4)

### Cart::update('product id','product qty')

You can use this method for update cart

	Cart::update(1,8)

### Cart::subtotal()

You can use this method for get cart subtotal price.

	Cart::subtotal()

### Cart::total()

You can use this method for get cart total price

### Cart::remove('cart id')

You can use this method for delete item from cart

	Cart::remove(1)

### Cart::count()

You can use this method for total cart quantity

	Cart::count()

### Cart::has()

This method will be check that you have any item in cart

	Cart::has()

### Cart::destroy()

You can use this method for delete all item from cart

	Cart::destroy()

### Wishlist::get()

You can use this method for get your wishlist item.

	Wishlist::get()

### Wishlist::add('product id','product name','product price','product qty')

You can use this method for add product in your wishlist

	Wishlist::add(1,'product 1',100.00,4)

### Wishlist::remove('wishlist id')

You can use this method for delete item from wishlist

	Wishlist::remove(1)

### Wishlist::count()

You can use this method for total wishlist quantity

	Wishlist::count()

### Wishlist::has()

This method will be check that you have any item in wishlist

	Wishlist::has()

### Compare::get()

You can use this method for get your Compare item.

	Compare::get()

### Compare::add('product id','product name','product price','product qty')

You can use this method for add product in your Compare

	Compare::add(1,'product 1',100.00,4)

### Compare::remove('Compare id')

You can use this method for delete item from Compare

	Compare::remove(1)

### Compare::count()

You can use this method for total Compare quantity

	Compare::count()

### Compare::has()

This method will be check that you have any item in Compare

	Compare::has()

### Blog::get()

You can use this method for get blog item

 	Blog::get()

### Blog::details('blog id')

You can use this method for get single blog item

	Blog::details(1)

### Category get()

Of course you also want to get the category content. This is where you'll use the `get` method. This method will return a Collection of categories which you can iterate over and show the content to your customers.

	Category::get()

Suppose you want to get latest,oldest category. So you can pass parameter in this method.

	Category::get('latest') //Will get latest Category
	Category::get('oldest') //will get oldest Category

Now you want to get 5 or 3 latest,oldest category then you can use in this method.

	Category::get('latest',3) //will get latest 3 category
	Category::get('oldest',5) //will get oldest 5 category

### Category::get()->subcategory

You can use this method for get subcategory by category

	Category::get()->subcategory

### Coupon::get()

This method will return coupon details

### Coupon::add('Coupon code')

You can use this method for add coupon

 	Coupon::add('abc')

### Coupon::check('Coupon code')

This method will check that this coupon code has in your application

	Coupon::check('abc123')

### Currencies::get()

You can use this method for get all currency 

	Currencies::get()

### Currencies::add('currency code')

You can use this method for add currency in your application

	Currencies::add('usd')

### Currencies::price('Product price')

You can use this method for product currency price

	Currencies::price(100.00)

### Currencies::codeCheck()

You can use this method for check now which type currency has in your application
	
	Currencies::codeCheck()

### Review::get('product id')

You can use this method for get all review of your single product 

	Review::get(1)

### Review::add($data)

You can use this method for add review
	
	$data = [
		'product_id' => 1,
		'name' => "Arafat Hossain",
		'email' => "admin@example.com",
		'rating' => 4,
		'review' => "Wow! Nice product",
	];

	Review::add($data);

### Review::rating('product id')

You can use this method for get rating of a product

	Review::rating(1) //will get like 3.6/4.2/5



	

	
























