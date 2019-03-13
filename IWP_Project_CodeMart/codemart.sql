-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 08:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `codemart`
--

CREATE TABLE `codemart` (
  `LessonNumber` int(5) NOT NULL,
  `LessonName` varchar(50) NOT NULL,
  `VideoURL` varchar(100) NOT NULL,
  `Questions` varchar(1000) NOT NULL,
  `Option1` varchar(100) NOT NULL,
  `Option2` varchar(100) NOT NULL,
  `Option3` varchar(100) NOT NULL,
  `Option4` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Explanations` varchar(2000) NOT NULL,
  `right_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codemart`
--

INSERT INTO `codemart` (`LessonNumber`, `LessonName`, `VideoURL`, `Questions`, `Option1`, `Option2`, `Option3`, `Option4`, `Image`, `Explanations`, `right_ans`) VALUES
(1001, 'MIPS Introduction', '1001.mp4', 'What are registers $S0-$S7 called as?', 'Temporary Registers', 'Value Registers', 'Storage Registers', 'Argument Registers', 'C:\\Documents\\CodeMART\\V1.jpg', 'Storage registers have been abbreviated to $S0-9 registers for better understandability. ', 'Storage Registers'),
(1002, 'Writing Your First MIPS Code', '1002.mp4', 'What does the syscall function do in MIPS Assembly Language?', 'Prints the values of registers', 'Tells the system to prepare all the instructions for execution', 'Executes the MIPS program', 'Calls the system for fetching register values', 'back.jpg', 'Syscall function is used for telling the system to initiate the instructions and prepare them for execution. ', 'Tells the system to prepare all the instructions for execution'),
(1003, 'Printing A String', '1003.mp4', 'What is the use of asciiz keyword in MIPS?', 'To store a string in a data segment', 'To store a character in a data segment', 'To store a number in a data segment', 'To convert the specified string/character into it\'s equivalent ASCII code', '', 'By definition, asciiz keyword stores the specified string in a variable. This is different from the .byte in a way it can store a sequence of characters, while .byte can only store 1 char at a time.', 'To store a string in a data segment'),
(1004, 'Printing An Integer', '1004.mp4', 'What is the name of the first register we declare in the .text block?', 'Source Register', 'Value Register', 'Temporary Register', 'Destination Register', '', 'MIPS specifies the fact that the first register we implement in the .text bock should always be a destination register.', 'Destination Register'),
(1005, 'Printing A Float/Decimal Number', '1005.mp4', 'What is the  value we use that specifies we are going to print a float?', '1', '2', '4', '6', '', 'MIPS has assigned different values to various types of data types that we use. To keep the confusion away, different values are specified to different data types. For float, the specified value is 2.', '2'),
(1006, 'Printing Double Values', '1006.mp4', 'Which register is used for printing a double or float values?', '$f10', '$f11', '$f12', '$f13', '', 'MIPS Rules need that for printing the double or float values, we must use $f12. ', '$f12'),
(1007, 'How To Take String Input From User', '1007.mp4', 'What value is used to indicate the system that the user is going to give some input?', '1', '2', '4', '8', '', 'As shown in the video, 8 is used for telling the system that the user is going to give some input and system should prepare for the input.', '8'),
(1008, 'How To Take An Integer As User Input', '1008.mp4', 'What value is used for signifying that we are going to store an integer in the register?', '1', '3', '5', '7', '', 'As told in the video, 5 tells the system that we are going to store integer values.', '5'),
(1009, 'How To Take Float As User Input', '1009.mp4', 'What value of used to tell the system that the user is going to input a float value?', '2', '4', '6', '8', '', 'MIPS Rules tell us that to read a float value, we must use 6.', '6'),
(1010, 'How To Take Double As User Input', '1010.mp4', 'Which registers stores the float and double values?', '$f0', '$f1', '$f2', '$f3', 'This has been specified by MIPS.', 'General convention.', '$f0'),
(1011, 'Basic Arithmetics', '1011.mp4', 'Suppose $t0 and $t1 are the registers which hold values we need to add and $t2 should hold the result. Which of the following syntaxes would achieve the above?', 'addi $t2,$t1,$t0', 'addi $t0,$t2,$t1', 'addi $t1,$t0,$t2', 'addi $t0,$t1,$t2', '', 'The syntax of addi instruction is:\r\n\r\naddi $(destination_register),($source_register1),$(source_register2)\r\n\r\nAnd since $t2 is the destination register and $t0 and $t1 are the source register, we get that Option 1 is the answer.', ''),
(1012, 'Addition Syntax', '1012.mp4', 'Suppose user enters 56 for $t0 and 34 for $t1 and the instruction is:\r\nsubi $t2,$t1,$t0\r\nWhat will be answer stored in $t2?', '-22', '22', 'Data insufficient', 'Instruction won\'t execute', '', 'subi instruction subtracts immediate values, while here we are providing registers. Hence, the instruction is not compatible.', 'Instruction won\'t execute'),
(1013, 'Multiplication Syntax', '1013.mp4', 'What is the result of below instruction?\r\nmuli $t1,$t0,6\r\n\r\nwhere $t0=4', '24', '-24', '24.00', 'None as instruction is invalid', '', 'muli instruction multiplies the immediate value with the register value. Since here, $t0 stores 4 and immediate value is 6, the multiplication will give 24 as answer.', '24'),
(1014, 'Multiplication Syntax Part 2', '1014.mp4', 'What is the difference between mul and mult instructions?', 'mul tells only the integer part of the number, while mult tells the fractional part too', 'mul uses immediate values for multiplication while mult uses only register value', 'mul utilizes 3 registers while mult uses 2 registers', 'No difference, they are the same', '', 'mult uses 2 registers only while mul uses 3 registers. mult is used for multiplying 2 32 bit numbers as there will be overflow which mul can\'t handle this type of multiplication,.', 'mul utilizes 3 registers while mult uses 2 registers'),
(1015, 'Division Syntax', '1015.mp4', 'With the following instruction and given values, predict the output.\r\n\r\ndiv $t2,$t1,$t0\r\n\r\nwhere $t1=40 and $t0=6.', '6.66666', '6', '7', '4', '', 'The div instruction only displays the integer part of the result and truncates the fractional part. Or, we can say that div instructions shows the floor value of the result.', '6'),
(1016, 'Division Syntax Part 2', '1016.mp4', 'As explained in this video, the div instruction with 2 registers shows both quotient and remainder. Which register stores the remainder value?', 'Register lo', 'Register hi', '$t1 register', '$f0 ', '', 'hi register is the one that has been programmed to store the remainder value.', 'Register hi'),
(1017, 'Equality Instructions', '1017.mp4', 'What does bne stands for?', 'Branch on equal', 'Branch on not equal', 'Branch not equal to', 'None of the above', '', 'bne: Branch not equal to is the MIPS instruction which jumps to a specifies label when the value in the associated registers are not equal.', 'Branch not equal to'),
(1018, 'Equality To Zero Instructions', '1018.mp4', 'What does bnez do when the register holds a value of 0?', 'Jumps 2 lines', 'Jumps to the specified label', 'Jump back one line', 'Just another instructions and goes to next line', '', 'bnez, short for Branch Not Equal To Zero, when true, jumps to the label it was given and resumes program execution from there.', 'Jumps to the specified label');

-- --------------------------------------------------------

--
-- Table structure for table `codemart_c`
--

CREATE TABLE `codemart_c` (
  `LessonNumber` int(5) NOT NULL,
  `LessonName` varchar(50) NOT NULL,
  `VideoURL` varchar(100) NOT NULL,
  `Questions` varchar(1000) NOT NULL,
  `Option1` varchar(100) NOT NULL,
  `Option2` varchar(100) NOT NULL,
  `Option3` varchar(100) NOT NULL,
  `Option4` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Explanations` varchar(2000) NOT NULL,
  `right_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codemart_c`
--

INSERT INTO `codemart_c` (`LessonNumber`, `LessonName`, `VideoURL`, `Questions`, `Option1`, `Option2`, `Option3`, `Option4`, `Image`, `Explanations`, `right_ans`) VALUES
(2001, 'Input/Output', '2001.mp4', 'Depending on need, which header files have to be included in your C++ code, for no compilation errors regarding accepting input or displaying output?', 'iostream', 'iomanip', 'fstream', 'All of the above', '', 'Iostream is used to include standard input/output, like cin/cout\r\niomanip for set precision\r\nfstream to import files', 'All of the above'),
(2002, 'Arithmetic operations', '2002.mp4', 'The output for integer variable a, where a= (5+2)/8 will be?', '0\r\n\r\n', 'Runtime error', 'Compilation error', '0.875', '', 'Integer variable in C++ can not take floating point values', '0'),
(2003, 'If', '2003.mp4', 'When using an if condition, which of the following is necessary for execution?\r\n', '{}\r\n\r\n', 'else condition', ';', 'None of the above', '', 'The if statement doesn\'t need block generation if its one-line, nor does it need an else condition to execute', 'None of the above'),
(2004, 'Switch case', '2004.mp4', 'Which command is used to avoid passing of the code to the next labelled block in a switch statement?', 'default\r\n\r\n\r\n', 'case', 'break', 'No such command is required i.e; this property is inbuilt', '', 'The break statement brings the loop out of that specific iteration', 'break'),
(2005, '1D Array', '2005.mp4', 'In an array, the indices start at which value?\r\n', '-1\r\n\r\n', '0\r\n', '1', 'd)Others', '', 'By default the index value always starts at 0.', '0'),
(2006, '2D Array', '2006.mp4', 'Nested loops are always necessary for random traversal of a 2D array.', 'True', 'False', '', '', '', 'You need two loops to denote the two indices of traversal', 'True'),
(2007, 'For Loop', '2007.mp4', 'How many default parameters are allowed in the for loop declaration statement?\r\n', '0\r\n\r\n', '1', '2', '3', '', 'All 3 parameters can be passed as default, provided they have other places of definition.', '3'),
(2008, 'While Loop', '2008.mp4', 'What is the primary condition for a while loop  to be executed?', 'the holding statement is true\r\n', 'the holding statement is false\r\n', 'there are no infinite conditions', 'pointers are implicitly true', '', 'Only and till it is true, will a while loop get executed', 'the holding statement is true'),
(2009, 'Functions', '2009.mp4', 'When a function is executed, the compiler first checks which block in the code?', 'function definition block\r\n\r\n', 'function calling block', 'main', 'where function was declared', '', 'The compiler will always check the main first.', 'main'),
(2010, 'Structures', '2010.mp4', 'What feature of OOP does structures showcase?', 'Modularity', 'Abstraction', 'Polymorphism', 'Hashing', '', 'The concept of structures in C++ was introduced to showcase the ability of data to have abstractions', 'Abstraction');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `Sex` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userID`, `username`, `password`, `FirstName`, `LastName`, `Sex`, `Email`) VALUES
(2, 'Pratik1', 'z', 'Pratik', 'Sen', 'male', 'abcd@gmail.com'),
(3, 'Pra1 ', 'z', 'Pratik', 'Sen', 'male', 'abcd@gmail.com'),
(4, 'Pratik', 'ps', 'Pratik', 'Sen', 'male', 'abcd@gmail.com'),
(5, 'Hisham', 'hj', 'Hisham', 'Jaffar', 'male', 'abcd@gmail.com'),
(6, 'MalathiG', 'mg', 'Malathi', 'G', 'female', 'abcd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codemart`
--
ALTER TABLE `codemart`
  ADD PRIMARY KEY (`LessonNumber`);

--
-- Indexes for table `codemart_c`
--
ALTER TABLE `codemart_c`
  ADD PRIMARY KEY (`LessonNumber`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
