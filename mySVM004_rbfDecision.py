
from sklearn.svm import SVC
from sklearn.metrics import accuracy_score
import numpy as np
import math


#X=[[1,1],[1,-1],[-1,1],[-1,-1],[2,2],[2,-2],[-2,2],[-2,-2]]

X=[[1.1,1.1],[1.2,-1.2],[-1.3,1.3],[-1.4,-1.4],[0.2,0.2],[2.1,2.1],[2.2,-2.2],
   [-2.3,2.3],[-2.4,-2.4],[8.0,8.0]]
y=[1,1,1,1,1,-1,-1,-1,-1,-1]

#model=SVC(kernel="linear")
model=SVC(C=100,kernel="rbf",gamma=2)
model.fit(X,y)
print(model)


parameters=model.get_params()
print(parameters)

SV=model.support_vectors_
print("SV",SV)

indx=model.support_
print("indx",indx)

b=model.intercept_
print(f'intercept_:{model.intercept_}')
print()
alpha=model.dual_coef_
print(f'Alpha(已經乘上label):{alpha}')
print(f'Alpha(已經乘上label):{len(alpha[0])}')

y_pred=model.predict(X)
print(f'Accuracy : {accuracy_score(y,y_pred)}')

def rbfDecision(gamma,x_new):
    total=0
    for i in indx:
        #print(f'SV:{SV[i]}')
        expart=math.exp(-gamma*np.transpose(x_new-SV[i]).dot(x_new-SV[i]))
        #print(f'exp:{expart}')
        '''
        if (alpha[0,i] <  0.0):
            total=total+y[i]*(-alpha[0,i])*expart
        else:
            total=total+y[i]*(alpha[0,i])*expart
        '''
        total=total+alpha[0,i]*expart
        #print(f'total:{total}')
    value=total+b
    return value
        

for a in X:
 x_new=a
 print("x-new",type(x_new))
 y_new=rbfDecision(2.0,x_new)
 print(x_new)
 print(f'y_new:{y_new})')
 print()






