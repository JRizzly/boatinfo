#include<iostream>
#include<fstream>
#include<string>
#include<istream>
#include<vector>
#include<sstream>
#include<iterator>


using namespace std;



void doEverything() {
	
	string currentLine = "";
	int i = 0;	
	vector<string> words;
	string tempWord = "";
	vector<vector<string>> vecWords;
	string combinedResult = "";

	ifstream myfilestream;
	myfilestream.open ("Data.txt");
	
	if (myfilestream.is_open()) {
		cout<< "file is open and working" << endl;

	}
		while (!myfilestream.eof()) {
			if (i == 0) { //dont read the first line
				i++;
				continue;
			}	
				
			getline( myfilestream ,currentLine); //get the line
			
			if (currentLine[0] != i) {
				cerr<<"Off by Number of lines error" << endl;
			}

			int j=0;
			while (currentLine[j]) {  //divide the line into words
				//if (currentLine[j] == "L" && !isspace(currentLine[j+2] ) ) {
				//	words.push_back(currentLine[j]);
				//}
				
				if ( isspace(currentLine[j] && j != 0 && j != 1 ) ) {
					words.push_back(tempWord);
					j++;
					continue;
				}

				tempWord = tempWord + currentLine[j];
				j++;
			}
			vecWords.push_back(words);
			cout<<"Finished Reading a line:" << i << endl;
		}

		
		for (int i = 0; i < vecWords.size(); i++ ) {
			for (int j = 1; j < vecWords[i].size() -1 ; j++ ) {
				combinedResult = combinedResult + vecWords[i][j] ;

			}
			vecWords[i][1] = combinedResult;
			combinedResult = "";
		}
		
	myfilestream.close();

	for(int i = 0; i < vecWords.size(); i++) {
		cout<< vecWords[i][0] << " results to: " << vecWords[i][1] << endl;
	}


}





int main() {

	cout<< "Running Program to read in values and put them into PHP syntax" << endl;
	doEverything();
	system("pause");

}