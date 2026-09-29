import customtkinter as customtk
#Variables

## Colours
BGCOLOUR = '#17375E' # Vatsim UK Dark blue

app = customtk.CTk()

#Configuration of the window and its properties
app.title("Rosterly") # Changes the title of the window
app.geometry("900x900") # Defines the initial size of the window
app.configure(fg_color=BGCOLOUR) #Sets the background colour to a dark blue
#Config end


app.mainloop()
