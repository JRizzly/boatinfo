#include<iostream>
#include<fstream>
#include<string>
#include<istream>
#include<vector>
#include<sstream>
#include<iterator>
#include<cstdlib>


using namespace std;



void doEverything() {
	
	string currentLine = "";
	
	vector<string> words;
	string tempWord = "";
	vector<vector<string>> vecWords;
	string combinedResult = "";

	ifstream myfilestream;
	myfilestream.open ("Data.txt");
	
	if (myfilestream.is_open()) {
		cout<< "file is open and working" << endl;

	}	
		int k = 1;
		getline( myfilestream ,currentLine); //get the first line and throw it away
		while (!myfilestream.eof()) {
	
			getline( myfilestream ,currentLine); //get the non first line
			
			
			int j=0;
			while (j < currentLine.length()) {  //divide the line into words
			
				if ( isspace(currentLine[j]  ) ) {
					words.push_back(tempWord);
					tempWord = "";   //This line right here drove me insane for hours
					j++;
					
				} else {
				
				tempWord = tempWord + currentLine[j];
				j++;
				}
				if ( j == currentLine.length() ) {
					words.push_back(tempWord);
					tempWord = "";
					j++;
				}

			}
			vecWords.push_back(words);
			words.clear();
			cout<<"Finished Reading a line:" << k << endl;
			
			k++;
		}

		cout<< vecWords.size() << endl;
		
		for (int i = 0; i < vecWords.size(); i++ ) {
			vecWords[i][2] = "";
			vecWords[i][2] = vecWords[i][7] + vecWords[i][8] + vecWords[i][9] + vecWords[i][10] + vecWords[i][11] + vecWords[i][12] + vecWords[i][13] + vecWords[i][14] + vecWords[i][15] + vecWords[i][16] + vecWords[i][17];
			
		}
		


	myfilestream.close();

	

	for(int i = 0; i < vecWords.size(); i++) {
		cout<< vecWords[i][1] << " results to: " << vecWords[i][2] << endl;
	}


}





int main() {

	cout<< "Running Program to read in values and put them into PHP syntax" << endl;
	doEverything();
	system("pause");

}