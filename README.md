# Recipe-Finder



Recipe Finder Application Usage
-------------------------------

1. Download ZIP from https://github.com/Nandanit/Recipe-Finder.git repository in GitHib

2. Extract content to Recipe-Finder-main

3. Navigate to Recipe-Finder-main\Recipe-Finder-main

Requirements
--------------------------------
PHP 5.6+

PHPUnit 5.6+

Recipe finder Requirement
-------------------------------
Given a list of items in the fridge (presented as a csv list), and a collection of recipes (a collection of JSON formatted recipes), produce a recommendation for what to cook tonight.

Program should be written to take two inputs; fridge csv list, and the json recipe data. How you choose to implement this is up to you; you can write a console application which takes input file names as command line args, or as a web page which takes input through a form.

The only rule is that it must run and return a valid result using the provided input data.

Input: 
 
fridge.csv 

 Format: item, amount, unit, use​by 
 Where; 

 ● Item (string) = the name of the ingredient – e.g. egg) 
 ● Amount (int) = the amount 
 ● Unit (enum) = the unit of measure, values; 
 ● of (for individual items; eggs, bananas etc) 
 ● grams 
 ● ml (milliliters) 
 ● slices 
 ● Use​By (date) = the use by date of the ingredient (dd/mm/yy) 
 

Sample fridge CSV provided:
--------------------------------
bread,10,slices,25/12/2017
cheese,10,slices,25/12/2017
butter,250,grams,25/12/2017
peanut butter,250,grams,2/12/2017
mixed salad,500,grams,26/12/2016


Sample recipes json provided:
---------------------------------
[ 
	{ 
		"name": "grilledcheeseontoast", 
		"ingredients": [ 
							{ "item":"bread", "amount":"2", "unit":"slices"}, 
							{ "item":"cheese", "amount":"2", "unit":"slices"} 
						] 
	} 
	, 
	{ 
		"name": "saladsandwich", 
		"ingredients": [ 
							{ "item":"bread", "amount":"2", "unit":"slices"}, 
							{ "item":"mixed salad", "amount":"200", "unit":"grams"} 
						] 
	} 
] 
	


Unit Test:
-----------------------------
PHPUnit is being used for unit tests. Unit test file are located in Recipe-Finder-main\Recipe-Finder-main\phpUnitTest

1. Navigate to Recipe-Finder-main\Recipe-Finder-main\phpUnitTest

2. Run command: phpunit UnitTest fileTest.php

	e.g phpunit UnitTest RecipeFinderTest.php


	
Notes:
----------------------------
1. An ingredient that is past its useby date cannot be used for cooking.
2. If more than one recipe is found, then preference should be given to the recipe with the closest use-by item
3. If no recipe is found, the program should return “Order Takeout”
4. Program should be all-inclusive and a run script included
5. Please return either a link to an online Git repository, or the full repository. We want to see your commits.
7. Using the sample input above, the program should return "Salad Sandwich".
8. Include unit tests 
9. All code to be completed using php. 







 





















