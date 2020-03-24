
import pandas as pd 
import matplotlib.pyplot as plt
# plt.plot([1,2,3],[4,5,6])
# plt.show()

def fun():
    data=pd.read_csv('s2.csv')
    id_1=data[data.FIRST_NAME=='Mugdha']
    # print(id_1)
    plt.plot(id_1.Date,id_1.IN_TIME)
    plt.plot(id_1.Date,id_1.OUT_TIME)
    plt.xlabel('Date')
    plt.ylabel('Time')
    plt.show() 
    # name=input("Enter name:")
    # print(name)

    return


fun()