import tkinter as tk
import tkcalendar as tkcal
from tkinter import ttk

#Variables

## Colours
BGCOLOUR = '#17375E' # Vatsim UK Dark blue
LIGHTBLUE = '#25ADE3' # Vatsim UK light blue
WHITE = '#FFFFFF'

app = tk.Tk()

#Configuration of the window and its properties
app.title("Rosterly") # Changes the title of the window
app.geometry("700x700") # Defines the initial size of the window
app.configure(bg=BGCOLOUR) #Sets the background colour to a dark blue
#Config end

#functions


#Buttons

## Events
createEventButton = (tk.Button(text="Create Event"))
viewEventButton = (tk.Button(text="View Events"))
manageEventButton = (tk.Button(text="Manage Events"))
## End events

# End of buttons
#Button grid for main menu
createEventButton.grid(column=1,row=1)
viewEventButton.grid(column=1,row =2)
manageEventButton.grid(column=1,row=3)

# Button config

createEventButton.config(height=5, width=12,padx=5,pady=5)
viewEventButton.config(height=5,width=12,padx=5,pady=5)
manageEventButton.config(height=5,width=12,padx=5,pady=5)

# End button config

app.mainloop()