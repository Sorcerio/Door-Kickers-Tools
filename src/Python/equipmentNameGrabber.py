# Pulls weapon data from Equipment.xml files

# Imports
import re

# Main Thread
def main():
    # Get File Names
    inFile_name = input("File name to scan with extension: ")
    outFile_name = input("File name to export Names to with extension: ")

    # Options
    inFile_mode = input("Do you want to Write or Append (w/a)? ")

    # Check Options
    if inFile_mode == "w" or inFile_mode == "a": 
        # Open Files
        inFile = open(inFile_name,"r")
        outFile = open(outFile_name,inFile_mode)

        # Analyse Data
        inFile_read = inFile.read()
        names = re.findall('name=\"(.+?)\"',inFile_read)

        # Send out Data
        for item in names:
            # Ignore the elements
            # beacuse they're not actually gear
            if "Stats" in item or "SFX_" in item or "SWAT_" in item or "Operator_" in item or "WildB" in item or "Fire" in item or "Strafe" in item or "SniperRifle" in item or "SOff" in item:
                print("Ignored: "+item)
            else:
                outFile.write(item+"\n")

        # Close Files
        inFile.close()
        outFile.close()

    else:
        print("You're dumb.")
        exit()

main()
