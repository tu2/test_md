# Markdown practice
<!-- markdown has comments!
     this is a comment -->

**Learn and practice markdown!**

## Header2
### Header3
#### Header4
##### Header5
###### Header6

### Blockquotes

**One line blockquote**

>You are confined only by the walls you build yourself

**Two lines blockquotes**

```
If you don't know where you're going
Any road will get you there.

```
>One often meets his destiny on the road he takes to avoid it. Kung Fu Panda

```
There is a saying: yesterday is history, tomorrow is a mystery, but today is a gift. 
That is why it is called the "present". 
								       
								       Kung Fu Panda
														
```

### Lists
#### Unordered lists

* Item1
* Item2

#### Ordered lists

1. Item1
2. Item2

#### Nested lists

1. Item1
	* item_1a
	* item_1b
2. Item2
	* item_2a
	* item_2b

### Styling text

_This text_ is *italic* `_italic_` or `*italic*`

**This text** is **bold** `**bold**`

**These can be _combined_** if needed

### Code blocks

Code sample

**C**

factorial.c
```c
/* factorial.c */
#include <stdio.h>

long int factorial(int n);

int main(void)
{	
    int x = 7;
    printf("%d factorial is %ld\n", x, factorial(x));
    return 0;
}

long int factorial(int n)
{
    if (n == 1)
        return 1;
    else
        return n * factorial(n-1);
}

```
```shell
gcc factorial.c -o factorial
```

**Python**

```python
def fib(n):
	a, b = 0, 1
	while a < n:
		print(a, end=' ')
		a, b = b, a+b
	print()
fib(100)

```
**PHP**

```php
function add($a, $b){
	
	return $a + $b;

}
$result = add(12,20);
echo 'result = ' . $result;

```
### Tables

| Left aligned | Center aligned | Right aligned |
| :----------- | :------------: | ------------: |
| cell1        | cell5          | cell9         |
| cell2        | cell6          | cell10        |
| cell3        | cell7          | cell11        |
| cell4        | cell8          | cell12        |


#### Task Lists

- [x] list syntax required (any unordered or ordered list supported)
- [x] this is a complete item
- [ ] this is an incomplete item
	- [ ] item 

### Links

[Mastering markdown](https://guides.github.com/features/mastering-markdown/).

This works as well: https://github.com/tu2

### Emoji

[Emoji cheat sheet](https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md).

****

:thumbsup: I'm having a lot of fun! :heart: :uk: :smile:

