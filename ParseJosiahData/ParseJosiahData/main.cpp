#include<iostream>
#include<fstream>
#include<string>
#include<istream>
#include<vector>


using namespace std;



void parser(vector<string>* vec) {
	
	string input = "";
	int i = 0;	

	ifstream myfilestream;
	myfilestream.open ("Data.txt");
	
	if (myfilestream.is_open()) {
		cout<< "file is open and working" << endl;

	}
		while (!myfilestream.eof()) {
			if (i != 0) {
				getline( myfilestream ,input); 
				
			}	
			
			i++;

		}

}





int main() {

	cout<< "Running Program to read in values and put them into PHP syntax" << endl;
	vector<string>* fileLines;

	parser(fileLines);

	system("pause");
}