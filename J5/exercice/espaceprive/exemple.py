print()
items = []
prices = []
print("Welcome to the shopping Cart Program!")
print()
action = 0 
total = 0

while action != 5:
    print()
    print("Please select one of the following:")
    print("1. Add item")
    print("2. View cart")
    print("3. Remove item")
    print("4. Compute total")
    print("5. Quit")
    print()
    action = int(input("Please enter an action: "))
    print()

    while action > 5 and action < 1:
        action = int(input("Please enter an action between 1 and 5 : "))
    
    if action == 1: 
        new_item = input("what item would you like to add? ")
        print()
        items.append(new_item)
        new_price = float(input("What is the price of this item? "))
        prices.append(new_price)
        print()
        print(f"'{new_item}' has been added to the cart.")
    
    if action == 2:
        print("The contents of the shopping cart are:")
        print()
        for i in range(len(items)):
            item = items[i]
            price = prices[i]
            print(f"{i}. {item} - $ {price:.2f} ")
    
    if action == 3: 
        number_of_items = len(items)
        item_remove = int(input("Which item would you like to remove ? "))
        while item_remove > number_of_items:
            print("Sorry, that is not a valid item number")
            item_remove = int(input("Which item would you like to remove ? "))
        items.pop(item_remove)
        prices.pop(item_remove)
        print(f"The item {item_remove} has been removed from the list")
    
    if action == 4:
        for j in range(len(prices)):
            total += prices[j]
        print(f"The total price of the items in the shopping cart is $ {total:.2f}")
    
    if action == 5: 
        print()
        sentence = "Thank You Goodbye"
        words = sentence.split(" ")
        for word in words:
            print(word)