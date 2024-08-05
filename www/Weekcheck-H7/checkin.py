from datetime import datetime
from datetime import timedelta
import csv
import os

bookingsFile = open("Weekcheck-H7/bookings_DX28.csv", "r")
reader = csv.DictReader(bookingsFile)
bookingList = list(reader)

outFile = open("Weekcheck-H7/checked_in.txt", "w")

flight = bookingList[1]["flight_id"]
now = datetime.now()
deadline = now + timedelta(minutes=1)

os.system('cls')
print("\nWelkom bij de incheckbalie!")
print(f"Inchecken voor vlucht: {flight}")
print(f"Inchecken sluit om: {deadline.strftime('%H:%M:%S')}")
print(f"Het is nu:          {now.strftime('%H:%M:%S')}")
input("\n\nDruk op enter om door te gaan...")
os.system('cls')

isRunning = True
while isRunning:
    num = input("Booking id: ")
    os.system('cls')
    
    for booking in bookingList:
        if booking["booking_id"] == num:
            print("Controleer gegeven: ")
            print(f"{booking["flight_id"]} | {booking["booking_id"]} | {booking["name"]} | {booking["gender"]}")
            checkIn = input("\nIncecken? ja/nee: ")
            if checkIn == "ja":
                os.system('cls')
                print(f"Passagier {booking["name"]} is ingecheckt voor vlucht {booking["flight_id"]}!")
                outFile.write(f"{booking["booking_id"]}")
            else:
                os.system('cls')
                print(f"Passagier niet ingecheckt!")

    print("----------------------------")
    stop = input("Druk op enter om door te gaan of typ 'X'\n")
    os.system('cls')
    if (stop == 'X' or datetime.now() > deadline):
        isRunning = False

print("Check-in gesloten. Houdoe!")

bookingsFile.close()
outFile.close()