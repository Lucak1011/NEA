import tkinter as tk
from tkinter import ttk

#Variables

## Colours
BGCOLOUR = '#17375E' # Vatsim UK Dark blue

app = tk.Tk()

#Configuration of the window and its properties
app.title("Rosterly") # Changes the title of the window
app.geometry("700x700") # Defines the initial size of the window
app.configure(bg=BGCOLOUR) #Sets the background colour to a dark blue
#Config end

#functions


#Buttons
createEventButton = tk.Button(text="Hello World")
createEventButton.pack()
# End of buttons

app.mainloop()