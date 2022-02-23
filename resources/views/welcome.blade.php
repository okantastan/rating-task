
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wordpress Blog Comment Ratings</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Begin page content -->
    <main role="main" class="container">
      <h3 class="mt-5 mb-5">Wordpress Blog Comment Ratings</h3>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Post ID</th>
                  <th>Post Title</th>
                  <th>Rate</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ratings as $rating)
                <tr>
                  <td>{{ $rating->id }}</td>
                  <td>{{ $rating->post_id }}</td>
                  <td>{{ $rating->post_title }}</td>
                  <td>{{ $rating->rate }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </main>
  </body>
</html>