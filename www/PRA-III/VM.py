#----------------------------imports----------------------------

import csv
import os
from datetime import datetime
from datetime import timedelta

#----------------------------csv variables----------------------------

transportFile = open("PRA-III/VM.csv", "r")
reader = csv.DictReader(transportFile, delimiter=";")
transportList = list(reader)

#----------------------------code----------------------------

while True:
    with open("PRA-III/VM.txt", "a") as f:
        os.system("cls")
        print("Welkom bij ons Vervoersbedrijf - Materieel")
        print("1. Toon de gemiddeld onderhoudsduur van het materiaal")
        print("2. Toon de gemiddelde onderhoudskosten van gekozen voertuigen")
        print("3. Toon het aantal onderhoudsbeurten aan de voertuigen")
        print("4. Toon het aantal onderhoudsbeurten aan de bussen")
        print("5. Toon de top 10 duurste onderhoudsbeurten")
        print("6. Toon het aantal voertuigen van gekozen voertuig met onderhoudskosten groter dan ingevulde kosten")
        print("X. Sluit heb programma af")

        choice = input("\nMaak een keuze: ")
        os.system("cls")

        maintenanceTime = 0

        if choice == "1":
            for transport in transportList:
                maintenanceTime += int(transport['Onderhoud_mins'])

            numTransport = len(transportList)
            averageMaintenanceTime = round(maintenanceTime / numTransport)

            print(f"Gemiddelde onderhoud tijd: \n{averageMaintenanceTime} minuten")
            print(f"Gemiddelde onderhoud tijd: \n{averageMaintenanceTime} minuten", file=f)
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")
        elif choice == "2":
            maintenanceCost = 0.0
            transportTypeChoice = input("\nVoertuigtype van vervoer: ")
            print(f"\nGemiddelde kostte {transportTypeChoice}: ")
            print(f"\nGemiddelde kostte {transportTypeChoice}: ", file=f)
            
            for transport in transportList:
                if transportTypeChoice == transport["Voertuigtype"]:
                    maintenanceCost += float(transport['Onderhoud_Kosten'])
                    maintenanceCost = int(maintenanceCost)
            if maintenanceCost == 0.0:
                print("\nERROR! Dit voertuig staat niet in de lijst!")
            else:
                print(f"${maintenanceCost}")
                print(f"${maintenanceCost}", file=f)
            
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")
        elif choice == "3":
            for month in transportList:
                today = datetime.now()
                check_date = today - timedelta(days=60)
                check_date = datetime.strptime(month["Datum laatste onderhoud"], "%d-%m-%Y")
                onderhoudsbeurten = 0
                for month in transportList:
                    endDate = datetime.strptime(month["Datum laatste onderhoud"], "%d-%m-%Y")
                    if check_date <= endDate:
                        onderhoudsbeurten += 1
            print(f"Er waren {onderhoudsbeurten} onderhoudsbeurten in de afgelopen 2 maanden")
            print(f"\nEr waren {onderhoudsbeurten} onderhoudsbeurten in de afgelopen 2 maanden", file=f)
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")
        elif choice == "4":
            onderhoud = 0
            for Bus in transportList:
                if "Bus" == Bus['Voertuigtype']:
                    onderhoud += 1
            print(f"Het voertuig 'Bus' is {onderhoud} keer onderhouden")
            print(f"\nHet voertuig 'Bus' is {onderhoud} keer onderhouden", file=f)
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")
        elif choice == "5":
            print("Top 10 duurste onderhoud aan de voertuigen: ")
            print("\nTop 10 duurste onderhoud aan de voertuigen: ", file=f)
            Onderhoud_Kosten = sorted(transportList, key=lambda row: float(row["Onderhoud_Kosten"]), reverse=True)
            for i in range(10):
                item = Onderhoud_Kosten[i]
                print(f"{item['Nummerplaat']} - €{item['Onderhoud_Kosten']}")
                print(f"{item['Nummerplaat']} - €{item['Onderhoud_Kosten']}", file=f)
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")
        elif choice == "6":
            transportMinCost = float(input("\nMinimale kosten: "))
            transportTypeChoice = input("\nHet vervoer waar je koste van wilt weten boven je minimale kosten: ")
            print(f"\nHet vervoer dat boven de €{transportMinCost} is: ", file=f)
            for transport in transportList:
                transportCost = float(transport['Onderhoud_Kosten'])
                if transportTypeChoice == transport["Voertuigtype"]:
                    if transportCost > transportMinCost:
                        print(f"{transport["Voertuigtype"]} | {transport["Nummerplaat"]} - €{transportCost}")
                        print(f"{transport["Voertuigtype"]} | {transport["Nummerplaat"]} - €{transportCost}", file=f)
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")
        elif choice == "X":
            os.system("cls")
            transportFile.close()
            f.close()
            quit()
        else:
            print("ERROR! Het gegeven nummer bestaat niet!")
            end = input("\nKlik ENTER om door te gaan of 'X' om te sluiten: ")

        if end == "X":
            os.system("cls")
            transportFile.close()
            f.close()
            quit()