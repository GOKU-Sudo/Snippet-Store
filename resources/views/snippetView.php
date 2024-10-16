
<?php
use App\Models\User;


// Retrieve a user by their ID
$user = User::find(1);

if ($user) {
      // Get all snippets associated with the user
      $snippets = $user->snippets;

      // Iterate through the snippets
      foreach ($snippets as $snippet) {
            // echo $snippet->title . '<br>';
            echo htmlspecialchars($snippet->code);
            // echo $snippet->code .'<br>';
           

      }
} else {
      echo 'User not found.';
}
?>