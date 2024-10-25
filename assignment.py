Diameter = input()
chars = set('0123456789')
if all((c in chars) for c in Diameter):
  Diameter = float(Diameter)
  Radius = Dtr/2
  Circumference = round(3.14*Rad*20)/10
  Area = round(Rad*Rad*31.4)/10
  print(Diameter)
  print(Radius)
  print(Circumference)
  print(Area)
else:
    print("Invalid Character")