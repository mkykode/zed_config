#!/bin/bash
# make sure this is added to your bin, ~/.local/bin/phpcbf-wrapper
/Users/jullweber/.composer/vendor/bin/phpcbf --standard=WordPress "$@"
# phpcbf returns 1 if it made changes but couldn't fix everything
# which is fine for our purposes
if [ $? -eq 1 ]; then
  exit 0
fi
exit $?
