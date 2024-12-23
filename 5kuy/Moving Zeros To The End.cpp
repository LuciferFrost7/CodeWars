#include <vector>

using namespace std;
std::vector<int> move_zeroes(const std::vector<int>& input) {
  vector<int> nm;
  int countOfZeros = 0;
  for(int i = 0;i < input.size(); i++){
    if(input[i] == 0) countOfZeros++;
    if(input[i] != 0) nm.push_back(input[i]);
  }
  for(int i = 0; i < countOfZeros; i++){
    nm.push_back(0);
  }
  return nm;
}