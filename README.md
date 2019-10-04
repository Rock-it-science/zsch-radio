A 24/7 free curated internet radio station

Ideas:
1. Audio files in a folder, automatically scan new files and add to list
  - Hard to implement
  + Can have folders for different moods/shows
  - Potential legal issues of downloading files / royalties (can't rebroadcast files without paying royalties), might not be a big issue for this small of a project
2. Use embedded YouTube videos
  + Easiest to implement
  - Lots of bandwidth
  - Can't do custom bumpers or transitions
  + No legal issues

Back-end synchronization control:
1.  PHP
  % URLs of YouTube playlists stored, and passed to all clients at the same time using AJAX
