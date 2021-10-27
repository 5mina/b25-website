# github versioning

## format:
<<<<<<< HEAD
[name]_[major].[minor].[patch]_(subname)
=======
[name]_[major].[minor].[patch]-[subname]
>>>>>>> 3a8d0378f66e937aefb838390e208d53a34d49f1

the name shall be in full and camel case for 1.0.0

versions after 1.0.0 will have a compact name instead of the name it already had (i.e. placeHolder becomes ph). some deviation will be allowed if said compact name was already taken.

subnames can be added to add a little context to the changes in the new version. only add them along with minor and major patches.

### modified semver
• major - deleting a file

• minor - adding and modifying files

• patch - modifying file contents

# rules
<<<<<<< HEAD
• using camel case for file names is highly recommended
=======
• using camel case for file names is highly recommended
>>>>>>> 3a8d0378f66e937aefb838390e208d53a34d49f1
