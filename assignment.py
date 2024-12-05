# Get the diametr from the user as a string
dStr = input("please enter diameter: ")

# Convert the string to a number
diameter = 0
try:
  diameter = float(dStr)
except:
  print("please input a positive number")
  exit()

# Checking for negative numbers 
if diameter <= 0:
  print("please input a positive number")
  exit()

# Doing calculations
PI = 3.14
radius = diameter/2 
circumference = PI * diameter
area = PI * (radius**2)

# Printing out Area and Circumference
print('Circumference = ', circumference)
print('Area = ', area)