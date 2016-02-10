#include <opencv2/core/core.hpp>
#include <opencv2/highgui/highgui.hpp>
#include <iostream>

using namespace cv;
using namespace std;

int main(int argc, char** argv)
{
    Mat image;
    image = imread(argv[1], CV_LOAD_IMAGE_GRAYSCALE);

    if(imwrite(argv[1], image))
        cout << "Success" << endl;
    else
        cout << "Error occurred" << endl;

    return 0;
}
