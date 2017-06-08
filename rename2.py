#!/usr/bin/env python
 
import glob
import re
import os
 
files = glob.glob('*.JPG')  # get *.JPG in a list (not sorted!)
files.sort()                # sort the list _in place_
cnt = 11                    # start new names with 11.jpg
 
for f in files:
    original = f                                    # save the original file name
    result = re.search(r'Scan(\d+)\.JPG', f)        # pattern to match
    if result:                                      # Is there a match?
        new_name = str(cnt) + '.jpg'                # create the new name
        print "%s => %s" % (original, new_name)     # verify if it's OK
        # os.rename(original, new_name)             # then uncomment to rename
        cnt += 1    