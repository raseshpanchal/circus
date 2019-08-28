-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 09:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wheresert`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`ID`, `Title`, `Description`, `Publish`) VALUES
(1, 'WhereSert.com', '%3Ch3%3EThe+standard+Lorem+Ipsum+passage%2C+used+since+the+1500s%3C%2Fh3%3E%22Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.%22%3Ch3%3ESection+1.10.32+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22Sed+ut+perspiciatis+unde+omnis+iste+natus+error+sit+voluptatem+accusantium+doloremque+laudantium%2C+totam+rem+aperiam%2C+eaque+ipsa+quae+ab+illo+inventore+veritatis+et+quasi+architecto+beatae+vitae+dicta+sunt+explicabo.+Nemo+enim+ipsam+voluptatem+quia+voluptas+sit+aspernatur+aut+odit+aut+fugit%2C+sed+quia+consequuntur+magni+dolores+eos+qui+ratione+voluptatem+sequi+nesciunt.+Neque+porro+quisquam+est%2C+qui+dolorem+ipsum+quia+dolor+sit+amet%2C+consectetur%2C+adipisci+velit%2C+sed+quia+non+numquam+eius+modi+tempora+incidunt+ut+labore+et+dolore+magnam+aliquam+quaerat+voluptatem.+Ut+enim+ad+minima+veniam%2C+quis+nostrum+exercitationem+ullam+corporis+suscipit+laboriosam%2C+nisi+ut+aliquid+ex+ea+commodi+consequatur%3F+Quis+autem+vel+eum+iure+reprehenderit+qui+in+ea+voluptate+velit+esse+quam+nihil+molestiae+consequatur%2C+vel+illum+qui+dolorem+eum+fugiat+quo+voluptas+nulla+pariatur%3F%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%22But+I+must+explain+to+you+how+all+this+mistaken+idea+of+denouncing+pleasure+and+praising+pain+was+born+and+I+will+give+you+a+complete+account+of+the+system%2C+and+expound+the+actual+teachings+of+the+great+explorer+of+the+truth%2C+the+master-builder+of+human+happiness.+No+one+rejects%2C+dislikes%2C+or+avoids+pleasure+itself%2C+because+it+is+pleasure%2C+but+because+those+who+do+not+know+how+to+pursue+pleasure+rationally+encounter+consequences+that+are+extremely+painful.+Nor+again+is+there+anyone+who+loves+or+pursues+or+desires+to+obtain+pain+of+itself%2C+because+it+is+pain%2C+but+because+occasionally+circumstances+occur+in+which+toil+and+pain+can+procure+him+some+great+pleasure.+To+take+a+trivial+example%2C+which+of+us+ever+undertakes+laborious+physical+exercise%2C+except+to+obtain+some+advantage+from+it%3F+But+who+has+any+right+to+find+fault+with+a+man+who+chooses+to+enjoy+a+pleasure+that+has+no+annoying+consequences%2C+or+one+who+avoids+a+pain+that+produces+no+resultant+pleasure%3F%22%3Ch3%3ESection+1.10.33+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22At+vero+eos+et+accusamus+et+iusto+odio+dignissimos+ducimus+qui+blanditiis+praesentium+voluptatum+deleniti+atque+corrupti+quos+dolores+et+quas+molestias+excepturi+sint+occaecati+cupiditate+non+provident%2C+similique+sunt+in+culpa+qui+officia+deserunt+mollitia+animi%2C+id+est+laborum+et+dolorum+fuga.+Et+harum+quidem+rerum+facilis+est+et+expedita+distinctio.+Nam+libero+tempore%2C+cum+soluta+nobis+est+eligendi+optio+cumque+nihil+impedit+quo+minus+id+quod+maxime+placeat+facere+possimus%2C+omnis+voluptas+assumenda+est%2C+omnis+dolor+repellendus.+Temporibus+autem+quibusdam+et+aut+officiis+debitis+aut+rerum+necessitatibus+saepe+eveniet+ut+et+voluptates+repudiandae+sint+et+molestiae+non+recusandae.+Itaque+earum+rerum+hic+tenetur+a+sapiente+delectus%2C+ut+aut+reiciendis+voluptatibus+maiores+alias+consequatur+aut+perferendis+doloribus+asperiores+repellat.%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%3Cspan%3E%22On+the+other+hand%2C+we+denounce+with+righteous+indignation+and+dislike+men+who+are+so+beguiled+and+demoralized+by+the+charms+of+pleasure+of+the+moment%2C+so+blinded+by+desire%2C+that+they+cannot+foresee+the+pain+and+trouble+that+are+bound+to+ensue%3B+and+equal+blame+belongs+to+those+who+fail+in+their+duty+through+weakness+of+will%2C+which+is+the+same+as+saying+through+shrinking+from+toil+and+pain.+These+cases+are+perfectly+simple+and+easy+to+distinguish.+In+a+free+hour%2C+when+our+power+of+choice+is+untrammelled+and+when+nothing+prevents+our+being+able+to+do+what+we+like+best%2C+every+pleasure+is+to+be+welcomed+and+every+pain+avoided.+But+in+certain+circumstances+and+owing+to+the+claims+of+duty+or+the+obligations+of+business+it+will+frequently+occur+that+pleasures+have+to+be+repudiated+and+annoyances+accepted.+The+wise+man+therefore+always+holds+in+these+matters+to+this+principle+of+selection%3A+he+rejects+pleasures+to+secure+other+greater+pleasures%2C+or+else+he+endures+pains+to+avoid+worse+pains.%22%3C%2Fspan%3E', 'Yes'),
(2, 'Press & News', '%3Ch3%3EThe+standard+Lorem+Ipsum+passage%2C+used+since+the+1500s%3C%2Fh3%3E%22Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.%22%3Ch3%3ESection+1.10.32+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22Sed+ut+perspiciatis+unde+omnis+iste+natus+error+sit+voluptatem+accusantium+doloremque+laudantium%2C+totam+rem+aperiam%2C+eaque+ipsa+quae+ab+illo+inventore+veritatis+et+quasi+architecto+beatae+vitae+dicta+sunt+explicabo.+Nemo+enim+ipsam+voluptatem+quia+voluptas+sit+aspernatur+aut+odit+aut+fugit%2C+sed+quia+consequuntur+magni+dolores+eos+qui+ratione+voluptatem+sequi+nesciunt.+Neque+porro+quisquam+est%2C+qui+dolorem+ipsum+quia+dolor+sit+amet%2C+consectetur%2C+adipisci+velit%2C+sed+quia+non+numquam+eius+modi+tempora+incidunt+ut+labore+et+dolore+magnam+aliquam+quaerat+voluptatem.+Ut+enim+ad+minima+veniam%2C+quis+nostrum+exercitationem+ullam+corporis+suscipit+laboriosam%2C+nisi+ut+aliquid+ex+ea+commodi+consequatur%3F+Quis+autem+vel+eum+iure+reprehenderit+qui+in+ea+voluptate+velit+esse+quam+nihil+molestiae+consequatur%2C+vel+illum+qui+dolorem+eum+fugiat+quo+voluptas+nulla+pariatur%3F%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%22But+I+must+explain+to+you+how+all+this+mistaken+idea+of+denouncing+pleasure+and+praising+pain+was+born+and+I+will+give+you+a+complete+account+of+the+system%2C+and+expound+the+actual+teachings+of+the+great+explorer+of+the+truth%2C+the+master-builder+of+human+happiness.+No+one+rejects%2C+dislikes%2C+or+avoids+pleasure+itself%2C+because+it+is+pleasure%2C+but+because+those+who+do+not+know+how+to+pursue+pleasure+rationally+encounter+consequences+that+are+extremely+painful.+Nor+again+is+there+anyone+who+loves+or+pursues+or+desires+to+obtain+pain+of+itself%2C+because+it+is+pain%2C+but+because+occasionally+circumstances+occur+in+which+toil+and+pain+can+procure+him+some+great+pleasure.+To+take+a+trivial+example%2C+which+of+us+ever+undertakes+laborious+physical+exercise%2C+except+to+obtain+some+advantage+from+it%3F+But+who+has+any+right+to+find+fault+with+a+man+who+chooses+to+enjoy+a+pleasure+that+has+no+annoying+consequences%2C+or+one+who+avoids+a+pain+that+produces+no+resultant+pleasure%3F%22%3Ch3%3ESection+1.10.33+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22At+vero+eos+et+accusamus+et+iusto+odio+dignissimos+ducimus+qui+blanditiis+praesentium+voluptatum+deleniti+atque+corrupti+quos+dolores+et+quas+molestias+excepturi+sint+occaecati+cupiditate+non+provident%2C+similique+sunt+in+culpa+qui+officia+deserunt+mollitia+animi%2C+id+est+laborum+et+dolorum+fuga.+Et+harum+quidem+rerum+facilis+est+et+expedita+distinctio.+Nam+libero+tempore%2C+cum+soluta+nobis+est+eligendi+optio+cumque+nihil+impedit+quo+minus+id+quod+maxime+placeat+facere+possimus%2C+omnis+voluptas+assumenda+est%2C+omnis+dolor+repellendus.+Temporibus+autem+quibusdam+et+aut+officiis+debitis+aut+rerum+necessitatibus+saepe+eveniet+ut+et+voluptates+repudiandae+sint+et+molestiae+non+recusandae.+Itaque+earum+rerum+hic+tenetur+a+sapiente+delectus%2C+ut+aut+reiciendis+voluptatibus+maiores+alias+consequatur+aut+perferendis+doloribus+asperiores+repellat.%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%3Cspan%3E%22On+the+other+hand%2C+we+denounce+with+righteous+indignation+and+dislike+men+who+are+so+beguiled+and+demoralized+by+the+charms+of+pleasure+of+the+moment%2C+so+blinded+by+desire%2C+that+they+cannot+foresee+the+pain+and+trouble+that+are+bound+to+ensue%3B+and+equal+blame+belongs+to+those+who+fail+in+their+duty+through+weakness+of+will%2C+which+is+the+same+as+saying+through+shrinking+from+toil+and+pain.+These+cases+are+perfectly+simple+and+easy+to+distinguish.+In+a+free+hour%2C+when+our+power+of+choice+is+untrammelled+and+when+nothing+prevents+our+being+able+to+do+what+we+like+best%2C+every+pleasure+is+to+be+welcomed+and+every+pain+avoided.+But+in+certain+circumstances+and+owing+to+the+claims+of+duty+or+the+obligations+of+business+it+will+frequently+occur+that+pleasures+have+to+be+repudiated+and+annoyances+accepted.+The+wise+man+therefore+always+holds+in+these+matters+to+this+principle+of+selection%3A+he+rejects+pleasures+to+secure+other+greater+pleasures%2C+or+else+he+endures+pains+to+avoid+worse+pains.%22%3C%2Fspan%3E', 'Yes'),
(3, 'Partnerships', '%3Ch3%3EThe+standard+Lorem+Ipsum+passage%2C+used+since+the+1500s%3C%2Fh3%3E%22Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.%22%3Ch3%3ESection+1.10.32+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22Sed+ut+perspiciatis+unde+omnis+iste+natus+error+sit+voluptatem+accusantium+doloremque+laudantium%2C+totam+rem+aperiam%2C+eaque+ipsa+quae+ab+illo+inventore+veritatis+et+quasi+architecto+beatae+vitae+dicta+sunt+explicabo.+Nemo+enim+ipsam+voluptatem+quia+voluptas+sit+aspernatur+aut+odit+aut+fugit%2C+sed+quia+consequuntur+magni+dolores+eos+qui+ratione+voluptatem+sequi+nesciunt.+Neque+porro+quisquam+est%2C+qui+dolorem+ipsum+quia+dolor+sit+amet%2C+consectetur%2C+adipisci+velit%2C+sed+quia+non+numquam+eius+modi+tempora+incidunt+ut+labore+et+dolore+magnam+aliquam+quaerat+voluptatem.+Ut+enim+ad+minima+veniam%2C+quis+nostrum+exercitationem+ullam+corporis+suscipit+laboriosam%2C+nisi+ut+aliquid+ex+ea+commodi+consequatur%3F+Quis+autem+vel+eum+iure+reprehenderit+qui+in+ea+voluptate+velit+esse+quam+nihil+molestiae+consequatur%2C+vel+illum+qui+dolorem+eum+fugiat+quo+voluptas+nulla+pariatur%3F%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%22But+I+must+explain+to+you+how+all+this+mistaken+idea+of+denouncing+pleasure+and+praising+pain+was+born+and+I+will+give+you+a+complete+account+of+the+system%2C+and+expound+the+actual+teachings+of+the+great+explorer+of+the+truth%2C+the+master-builder+of+human+happiness.+No+one+rejects%2C+dislikes%2C+or+avoids+pleasure+itself%2C+because+it+is+pleasure%2C+but+because+those+who+do+not+know+how+to+pursue+pleasure+rationally+encounter+consequences+that+are+extremely+painful.+Nor+again+is+there+anyone+who+loves+or+pursues+or+desires+to+obtain+pain+of+itself%2C+because+it+is+pain%2C+but+because+occasionally+circumstances+occur+in+which+toil+and+pain+can+procure+him+some+great+pleasure.+To+take+a+trivial+example%2C+which+of+us+ever+undertakes+laborious+physical+exercise%2C+except+to+obtain+some+advantage+from+it%3F+But+who+has+any+right+to+find+fault+with+a+man+who+chooses+to+enjoy+a+pleasure+that+has+no+annoying+consequences%2C+or+one+who+avoids+a+pain+that+produces+no+resultant+pleasure%3F%22%3Ch3%3ESection+1.10.33+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22At+vero+eos+et+accusamus+et+iusto+odio+dignissimos+ducimus+qui+blanditiis+praesentium+voluptatum+deleniti+atque+corrupti+quos+dolores+et+quas+molestias+excepturi+sint+occaecati+cupiditate+non+provident%2C+similique+sunt+in+culpa+qui+officia+deserunt+mollitia+animi%2C+id+est+laborum+et+dolorum+fuga.+Et+harum+quidem+rerum+facilis+est+et+expedita+distinctio.+Nam+libero+tempore%2C+cum+soluta+nobis+est+eligendi+optio+cumque+nihil+impedit+quo+minus+id+quod+maxime+placeat+facere+possimus%2C+omnis+voluptas+assumenda+est%2C+omnis+dolor+repellendus.+Temporibus+autem+quibusdam+et+aut+officiis+debitis+aut+rerum+necessitatibus+saepe+eveniet+ut+et+voluptates+repudiandae+sint+et+molestiae+non+recusandae.+Itaque+earum+rerum+hic+tenetur+a+sapiente+delectus%2C+ut+aut+reiciendis+voluptatibus+maiores+alias+consequatur+aut+perferendis+doloribus+asperiores+repellat.%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%3Cspan%3E%22On+the+other+hand%2C+we+denounce+with+righteous+indignation+and+dislike+men+who+are+so+beguiled+and+demoralized+by+the+charms+of+pleasure+of+the+moment%2C+so+blinded+by+desire%2C+that+they+cannot+foresee+the+pain+and+trouble+that+are+bound+to+ensue%3B+and+equal+blame+belongs+to+those+who+fail+in+their+duty+through+weakness+of+will%2C+which+is+the+same+as+saying+through+shrinking+from+toil+and+pain.+These+cases+are+perfectly+simple+and+easy+to+distinguish.+In+a+free+hour%2C+when+our+power+of+choice+is+untrammelled+and+when+nothing+prevents+our+being+able+to+do+what+we+like+best%2C+every+pleasure+is+to+be+welcomed+and+every+pain+avoided.+But+in+certain+circumstances+and+owing+to+the+claims+of+duty+or+the+obligations+of+business+it+will+frequently+occur+that+pleasures+have+to+be+repudiated+and+annoyances+accepted.+The+wise+man+therefore+always+holds+in+these+matters+to+this+principle+of+selection%3A+he+rejects+pleasures+to+secure+other+greater+pleasures%2C+or+else+he+endures+pains+to+avoid+worse+pains.%22%3C%2Fspan%3E', 'Yes'),
(4, 'Investor Relations', '%3Ch3%3EThe+standard+Lorem+Ipsum+passage%2C+used+since+the+1500s%3C%2Fh3%3E%22Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.%22%3Ch3%3ESection+1.10.32+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22Sed+ut+perspiciatis+unde+omnis+iste+natus+error+sit+voluptatem+accusantium+doloremque+laudantium%2C+totam+rem+aperiam%2C+eaque+ipsa+quae+ab+illo+inventore+veritatis+et+quasi+architecto+beatae+vitae+dicta+sunt+explicabo.+Nemo+enim+ipsam+voluptatem+quia+voluptas+sit+aspernatur+aut+odit+aut+fugit%2C+sed+quia+consequuntur+magni+dolores+eos+qui+ratione+voluptatem+sequi+nesciunt.+Neque+porro+quisquam+est%2C+qui+dolorem+ipsum+quia+dolor+sit+amet%2C+consectetur%2C+adipisci+velit%2C+sed+quia+non+numquam+eius+modi+tempora+incidunt+ut+labore+et+dolore+magnam+aliquam+quaerat+voluptatem.+Ut+enim+ad+minima+veniam%2C+quis+nostrum+exercitationem+ullam+corporis+suscipit+laboriosam%2C+nisi+ut+aliquid+ex+ea+commodi+consequatur%3F+Quis+autem+vel+eum+iure+reprehenderit+qui+in+ea+voluptate+velit+esse+quam+nihil+molestiae+consequatur%2C+vel+illum+qui+dolorem+eum+fugiat+quo+voluptas+nulla+pariatur%3F%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%22But+I+must+explain+to+you+how+all+this+mistaken+idea+of+denouncing+pleasure+and+praising+pain+was+born+and+I+will+give+you+a+complete+account+of+the+system%2C+and+expound+the+actual+teachings+of+the+great+explorer+of+the+truth%2C+the+master-builder+of+human+happiness.+No+one+rejects%2C+dislikes%2C+or+avoids+pleasure+itself%2C+because+it+is+pleasure%2C+but+because+those+who+do+not+know+how+to+pursue+pleasure+rationally+encounter+consequences+that+are+extremely+painful.+Nor+again+is+there+anyone+who+loves+or+pursues+or+desires+to+obtain+pain+of+itself%2C+because+it+is+pain%2C+but+because+occasionally+circumstances+occur+in+which+toil+and+pain+can+procure+him+some+great+pleasure.+To+take+a+trivial+example%2C+which+of+us+ever+undertakes+laborious+physical+exercise%2C+except+to+obtain+some+advantage+from+it%3F+But+who+has+any+right+to+find+fault+with+a+man+who+chooses+to+enjoy+a+pleasure+that+has+no+annoying+consequences%2C+or+one+who+avoids+a+pain+that+produces+no+resultant+pleasure%3F%22%3Ch3%3ESection+1.10.33+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22At+vero+eos+et+accusamus+et+iusto+odio+dignissimos+ducimus+qui+blanditiis+praesentium+voluptatum+deleniti+atque+corrupti+quos+dolores+et+quas+molestias+excepturi+sint+occaecati+cupiditate+non+provident%2C+similique+sunt+in+culpa+qui+officia+deserunt+mollitia+animi%2C+id+est+laborum+et+dolorum+fuga.+Et+harum+quidem+rerum+facilis+est+et+expedita+distinctio.+Nam+libero+tempore%2C+cum+soluta+nobis+est+eligendi+optio+cumque+nihil+impedit+quo+minus+id+quod+maxime+placeat+facere+possimus%2C+omnis+voluptas+assumenda+est%2C+omnis+dolor+repellendus.+Temporibus+autem+quibusdam+et+aut+officiis+debitis+aut+rerum+necessitatibus+saepe+eveniet+ut+et+voluptates+repudiandae+sint+et+molestiae+non+recusandae.+Itaque+earum+rerum+hic+tenetur+a+sapiente+delectus%2C+ut+aut+reiciendis+voluptatibus+maiores+alias+consequatur+aut+perferendis+doloribus+asperiores+repellat.%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%3Cspan%3E%22On+the+other+hand%2C+we+denounce+with+righteous+indignation+and+dislike+men+who+are+so+beguiled+and+demoralized+by+the+charms+of+pleasure+of+the+moment%2C+so+blinded+by+desire%2C+that+they+cannot+foresee+the+pain+and+trouble+that+are+bound+to+ensue%3B+and+equal+blame+belongs+to+those+who+fail+in+their+duty+through+weakness+of+will%2C+which+is+the+same+as+saying+through+shrinking+from+toil+and+pain.+These+cases+are+perfectly+simple+and+easy+to+distinguish.+In+a+free+hour%2C+when+our+power+of+choice+is+untrammelled+and+when+nothing+prevents+our+being+able+to+do+what+we+like+best%2C+every+pleasure+is+to+be+welcomed+and+every+pain+avoided.+But+in+certain+circumstances+and+owing+to+the+claims+of+duty+or+the+obligations+of+business+it+will+frequently+occur+that+pleasures+have+to+be+repudiated+and+annoyances+accepted.+The+wise+man+therefore+always+holds+in+these+matters+to+this+principle+of+selection%3A+he+rejects+pleasures+to+secure+other+greater+pleasures%2C+or+else+he+endures+pains+to+avoid+worse+pains.%22%3C%2Fspan%3E', 'Yes'),
(5, 'Intellectual Property', '%3Ch3%3EThe+standard+Lorem+Ipsum+passage%2C+used+since+the+1500s%3C%2Fh3%3E%22Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.%22%3Ch3%3ESection+1.10.32+of+%22de+Finibus+Bonorum+et+%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22Sed+ut+perspiciatis+unde+omnis+iste+natus+error+sit+voluptatem+accusantium+doloremque+laudantium%2C+totam+rem+aperiam%2C+eaque+ipsa+quae+ab+illo+inventore+veritatis+et+quasi+architecto+beatae+vitae+dicta+sunt+explicabo.+Nemo+enim+ipsam+voluptatem+quia+voluptas+sit+aspernatur+aut+odit+aut+fugit%2C+sed+quia+consequuntur+magni+dolores+eos+qui+ratione+voluptatem+sequi+nesciunt.+Neque+porro+quisquam+est%2C+qui+dolorem+ipsum+quia+dolor+sit+amet%2C+consectetur%2C+adipisci+velit%2C+sed+quia+non+numquam+eius+modi+tempora+incidunt+ut+labore+et+dolore+magnam+aliquam+quaerat+voluptatem.+Ut+enim+ad+minima+veniam%2C+quis+nostrum+exercitationem+ullam+corporis+suscipit+laboriosam%2C+nisi+ut+aliquid+ex+ea+commodi+consequatur%3F+Quis+autem+vel+eum+iure+reprehenderit+qui+in+ea+voluptate+velit+esse+quam+nihil+molestiae+consequatur%2C+vel+illum+qui+dolorem+eum+fugiat+quo+voluptas+nulla+pariatur%3F%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%22But+I+must+explain+to+you+how+all+this+mistaken+idea+of+denouncing+pleasure+and+praising+pain+was+born+and+I+will+give+you+a+complete+account+of+the+system%2C+and+expound+the+actual+teachings+of+the+great+explorer+of+the+truth%2C+the+master-builder+of+human+happiness.+No+one+rejects%2C+dislikes%2C+or+avoids+pleasure+itself%2C+because+it+is+pleasure%2C+but+because+those+who+do+not+know+how+to+pursue+pleasure+rationally+encounter+consequences+that+are+extremely+painful.+Nor+again+is+there+anyone+who+loves+or+pursues+or+desires+to+obtain+pain+of+itself%2C+because+it+is+pain%2C+but+because+occasionally+circumstances+occur+in+which+toil+and+pain+can+procure+him+some+great+pleasure.+To+take+a+trivial+example%2C+which+of+us+ever+undertakes+laborious+physical+exercise%2C+except+to+obtain+some+advantage+from+it%3F+But+who+has+any+right+to+find+fault+with+a+man+who+chooses+to+enjoy+a+pleasure+that+has+no+annoying+consequences%2C+or+one+who+avoids+a+pain+that+produces+no+resultant+pleasure%3F%22%3Ch3%3ESection+1.10.33+of+%22de+Finibus+Bonorum+et+Malorum%22%2C+written+by+Cicero+in+45+BC%3C%2Fh3%3E%22At+vero+eos+et+accusamus+et+iusto+odio+dignissimos+ducimus+qui+blanditiis+praesentium+voluptatum+deleniti+atque+corrupti+quos+dolores+et+quas+molestias+excepturi+sint+occaecati+cupiditate+non+provident%2C+similique+sunt+in+culpa+qui+officia+deserunt+mollitia+animi%2C+id+est+laborum+et+dolorum+fuga.+Et+harum+quidem+rerum+facilis+est+et+expedita+distinctio.+Nam+libero+tempore%2C+cum+soluta+nobis+est+eligendi+optio+cumque+nihil+impedit+quo+minus+id+quod+maxime+placeat+facere+possimus%2C+omnis+voluptas+assumenda+est%2C+omnis+dolor+repellendus.+Temporibus+autem+quibusdam+et+aut+officiis+debitis+aut+rerum+necessitatibus+saepe+eveniet+ut+et+voluptates+repudiandae+sint+et+molestiae+non+recusandae.+Itaque+earum+rerum+hic+tenetur+a+sapiente+delectus%2C+ut+aut+reiciendis+voluptatibus+maiores+alias+consequatur+aut+perferendis+doloribus+asperiores+repellat.%22%3Ch3%3E1914+translation+by+H.+Rackham%3C%2Fh3%3E%22On+the+other+hand%2C+we+denounce+with+righteous+indignation+and+dislike+men+who+are+so+beguiled+and+demoralized+by+the+charms+of+pleasure+of+the+moment%2C+so+blinded+by+desire%2C+that+they+cannot+foresee+the+pain+and+trouble+that+are+bound+to+ensue%3B+and+equal+blame+belongs+to+those+who+fail+in+their+duty+through+weakness+of+will%2C+which+is+the+same+as+saying+through+shrinking+from+toil+and+pain.+These+cases+are+perfectly+simple+and+easy+to+distinguish.+In+a+free+hour%2C+when+our+power+of+choice+is+untrammelled+and+when+nothing+prevents+our+being+able+to+do+what+we+like+best%2C+every+pleasure+is+to+be+welcomed+and+every+pain+avoided.+But+in+certain+circumstances+and+owing+to+the+claims+of+duty+or+the+obligations+of+business+it+will+frequently+occur+that+pleasures+have+to+be+repudiated+and+annoyances+accepted.+The+wise+man+therefore+always+holds+in+these+matters+to+this+principle+of+selection%3A+he+rejects+pleasures+to+secure+other+greater+pleasures%2C+or+else+he+endures+pains+to+avoid+worse+pains.%22', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;