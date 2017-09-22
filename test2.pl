#!/usr/bin/perl

    use strict;
    use warnings;

    my $dir = '~gheith/public/cs439h_f17_p3/latest/';

    opendir(DIR, $dir) or die $!;

    while (my $file = readdir(DIR)) {

        # Use a regular expression to ignore files beginning with a period
        next if ($file =~ m/^\./);

	print "$file\n";

    }

    closedir(DIR);
    exit 0;