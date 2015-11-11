#include <iostream>

using namespace std;

int main()
{
    //Write Question//
    cout <<"Write a number to convert : ";
    //Get input//
    float celsius;
    cin >> celsius;
    //get step//
    float Fanrenheit;
    float step = 1.8;
    //Logic part//
    Fanrenheit = (celsius * step) + 32;
    //Write answer//
    cout <<"It is : ";
    cout << Fanrenheit << " Fahrenheit";
    return 0;
}
