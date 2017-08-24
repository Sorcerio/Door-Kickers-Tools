# Prepares the list of items in a folder along with its extension

# Imports
import os

# Thread
def main():
    # Get the Info
    checkFolder = input("File to list contents of: ")
    outFile_name = input("Output file name: ")

    # Choose Options
    shouldPrefix = input("Should prefixes be added (y/n)? ")

    if shouldPrefix == "y" or shouldPrefix == "Y":
        # Set up Prefixs
        outPrefix = input("Prefix to file name: ")
        shouldPrefix = True

        # More Options
        shouldHTML = input("Should 'select item' HTML tags be added (y/n)? ")

        if shouldHTML == "y" or shouldHTML == "Y":
            # Set up HTML
            shouldHTML = True
        else:
            shouldHTML = False
    else:
        shouldPrefix = False

    # Report
    print("Reading",checkFolder,"into",outFile_name,"with Prefixes",shouldPrefix,"and HTML",shouldHTML)

    # Check folder
    dirList = os.listdir(checkFolder)

    # Open file
    outFile = open(outFile_name,"w")

    # Write to File
    for item in dirList:
        if shouldPrefix:
            if shouldHTML:
                item = outPrefix+item
                outFile.write("<option value='"+item+"'>"+item+"</option>"+"\n")
            else:
                outFile.write(outPrefix+item+"\n")
        else:
            outFile.write(item+"\n")

    # Close file
    outFile.close()

main()
