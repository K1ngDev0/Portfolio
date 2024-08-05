import pandas as pd
from datetime import datetime, timedelta
import lib_bamboo as bamboo
import os

os.system("cls") #Deze regel nog invullen! Hoe maak je het scherm leeg?
print("Working...")

data = pd.read_excel("Hockey_Hoofdklasse_tussenstand.xlsx")
data["datum"] = pd.to_datetime(data["datum"], format="%d/%m/%Y")
data = data.sort_values("datum")

#Informatievraag 1
count = data["overtredingen"].sum()
count = str(count)
file1 = open("output/Informatievraag_1.txt", "w")
file1.write(count)
file1.close() 


#Informatievraag 2
averageOvertredingen = data["overtredingen"].mean()
averageOvertredingen = round(averageOvertredingen)
averageOvertredingen = str(averageOvertredingen)
file2 = open("output/Informatievraag_2.txt", "w")
file2.write(averageOvertredingen)
file2.close()  


#Informatievraag 3
sorted_data = data.sort_values("overtredingen",ascending=False)
zwartBoek =  sorted_data.head(5)
file3 = open("output/Informatievraag_3.txt", "w", encoding="UTF-8")
file3.write(bamboo.prettify(zwartBoek, type="zwartboek"))
file3.write("\n")
file3.close() 
print(zwartBoek)






#Informatievraag 4

current_date = datetime.now()

time_threshold = current_date - timedelta(days=14)

filtered_data = data[(data["datum"] < time_threshold) & (data["overtredingen"] < 2)]

file4 = open("output/Informatievraag_4.txt", "w", encoding="UTF-8")
file4.write(bamboo.prettify(filtered_data, type="zwartboek"))
file4.write("\n")
file4.close() 


print("Done!")
