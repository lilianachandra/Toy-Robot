Description
This is a simulator of a “toy robot”. You will be writing code to place and move the “robot”
within a grid on a tabletop. Graphical output is required.
The robot will be placed and move on a square tabletop, of dimensions 5 units x 5 units
(Or definable by user). There are no other obstructions on the table surface.
The robot is free to roam around the surface of the table, but must be placed within the
table grid and prevented from falling to destruction. Any placement or movement that would
result in the robot falling from the table must be ignored, however further valid movement
commands must still be allowed.
Create an application that can read in commands of the following form:
• PLACE X,Y,F
PLACE will put the toy robot on the table in position X,Y and facing NORTH,
SOUTH, EAST or WEST. The origin (0,0) can be considered to be the SOUTH WEST most
corner.
The first valid command to the robot is a PLACE command, after that, any sequence of
commands may be issued, in any order, including another PLACE command. The
application should discard all commands in the sequence until a valid PLACE command
has been executed.
Place function will create New Session. If current session is already active, it will be
finished.
• MOVE
MOVE will move the toy robot one unit forward in the direction it is currently facing.
• LEFT & RIGHT
LEFT and RIGHT will rotate the robot 90 degrees in the specified direction without
changing the position of the robot.
• SAVE
Save robot movement log in database using following format:
1. TableSession -> Field:ID INT autoincrement, SessionStart DateTime, SessionFinish
DateTime, IpAddress.
2. Table SessionDetail -> Field: ID INT auto increment, xPosition int, yPosition, Face,
CreatedAt DateTime
• REPORT
1. REPORT will announce the X,Y and F of the robot. This can be in any form, but
standard output is sufficient. An example of the format: 2,3,NORTH and print the
position of robot in JSON File Format.
2. Print all session which are made on server.
Example Input and Output:
a)
Input:
• PLACE 0,0,NORTH
• MOVE
• REPORT
Output:
{
“position” : [0, 1],
“direction” : “NORTH”
}
b)
Input:
PLACE 0,0,NORTH
LEFT
REPORT
Output:
{
“position” : [0, 0],
“direction” : “WEST”
}
c)
Input
PLACE 1,2,EAST
MOVE
MOVE
LEFT
MOVE
REPORT
Output:
{
“position” : [3, 3],
“direction” : “EAST”
}
