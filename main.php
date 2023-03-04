<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JavaScript Arrays</title>
    <link href="css/style.css" rel="stylesheet"> 
  </head>
  <body>
    <h1>Product List</h1>
    <main></main>
    
	<script>
/*const inStock = ['pizza', 'cookies', 'eggs', 'apples', 'milk', 'cheese', 'bread', 'lettuce', 'carrots', 'broccoli', 'potatoes', 'crackers', 'onions', 'tofu', 'limes', 'cucumbers'];
const search = prompt('Search for a product.');
let message;

if (inStock.includes(search)) 
	{
	  message = `yes we have ${search}. `;
	}
else 
	{
	  message = `Sorry, we do not have  ${search}`;
	}

document.querySelector('main').innerHTML = `<p>${message}</p>`;*/
	
	let quiz = [["what is my name", "laurie"], ["what is my daughters name", "ali"]];
	

	let count = 0;
	
	for (let i = 0; i < quiz.length; i++) 
		{
			
			let answer = prompt(quiz[i][0]);
			if(answer == quiz[i][1])
				{
					count = count+1;
				}
			
		}		
	document.write("the number of correct answers is " + (count));	
		
		
		
	</script>
	

	
	
	
	
	
  </body>
</html>