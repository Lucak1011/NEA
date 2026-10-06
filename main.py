import tkinter as tk
import tkcalendar as tkcal
from tkinter import ttk

#Variables

## Configuration consts

buttonConfig1 = { # Used in main menu
    "height":5,
    "width":12
}

buttonPadding1 = {
    "padx":20,
    "pady":20
}

buttonPadding2 = {
    "padx":10,
    "pady":10,
}

## Colours
BGCOLOUR = '#17375E' # Vatsim UK Dark blue
LIGHTBLUE = '#25ADE3' # Vatsim UK light blue
WHITE = '#FFFFFF'
EXIT_RED = '#a8311e'

app = tk.Tk()

#Configuration of the window and its properties
app.title("Rosterly") # Changes the title of the window
app.geometry("700x700") # Defines the initial size of the window
app.configure(bg=BGCOLOUR) #Sets the background colour to a dark blue
#Config end

#functions


#Buttons

## Main Menu

### Events
createEventButton = (tk.Button(text="Create Event",))
viewEventButton = (tk.Button(text="View Events",))
manageEventButton = (tk.Button(text="Manage Events",))
### End events

###Roster

createRosterButton = (tk.Button(text="Create Roster"))
viewRosterButton = (tk.Button(text="View Roster"))
editRosterButton = (tk.Button(text="Edit Roster"))

### end roster

###User management

viewUsersButton = (tk.Button(text="View Users"))
createUsersButton = (tk.Button(text="Create User"))
manageUsersButton = (tk.Button(text="Manage Users"))

### End User Management

### Other buttons

exitButton = (tk.Button(text="Exit", command=app.destroy, bg=EXIT_RED))

## Main Menu end
# End of buttons
#Button grid for main menu
createEventButton.grid(column=1,row=2,**buttonPadding1) #Specifies where the buttons should be in the grid, and the size of the padding, applies to all lines in the # Button grid for main menu section
viewEventButton.grid(column=1,row =3,**buttonPadding1)
manageEventButton.grid(column=1,row=4,**buttonPadding1)

createRosterButton.grid(column=2,row=2,**buttonPadding1)
viewRosterButton.grid(column=2,row=3,**buttonPadding1)
editRosterButton.grid(column=2,row=4,**buttonPadding1)

createUsersButton.grid(column=3,row=2,**buttonPadding1)
viewUsersButton.grid(column=3,row=3,**buttonPadding1)
manageUsersButton.grid(column=3,row=4,**buttonPadding1)

exitButton.grid(column=1,row=5,pady=40)
# Button config

createEventButton.config(**buttonConfig1) #Specifies the height and width for each button, applies to all lines in the #Button config section.
viewEventButton.config(**buttonConfig1)
manageEventButton.config(**buttonConfig1)

createRosterButton.config(**buttonConfig1)
viewRosterButton.config(**buttonConfig1)
editRosterButton.config(**buttonConfig1)

createUsersButton.config(**buttonConfig1)
viewUsersButton.config(**buttonConfig1)
manageUsersButton.config(**buttonConfig1)
exitButton.config(**buttonConfig1)

# End button config

app.columnconfigure(0, weight=1)
app.columnconfigure(5, weight=1)
app.rowconfigure(0, weight=1)

titleLabel = tk.Label(app, text="ROSTERLY", fg=WHITE,bg=BGCOLOUR,font="Calibri 20")
titleLabel.grid(row=1,column=2)

app.mainloop()