
@extends('layouts.admin')


@section('main')
<main class="main-content">
  <!-- Top Navigation -->
  <div class="top-nav">
      <h1>Dashboard</h1>
      <div class="user-menu">
          <img src="profile.jpg" alt="Admin">
          <span>Admin User</span>
      </div>
  </div>

  <!-- Stats Cards -->
    <div class="stats-container">
        <div class="stat-card">
            <i class="bi bi-envelope text-primary"></i>
            <div class="stat-value">{{ $stats['messages_count'] }}</div>
            <div class="stat-label">New Messages</div>
        </div>
        <div class="stat-card">
            <i class="bi bi-chat-square-quote text-warning"></i>
            <div class="stat-value">{{ $stats['testimonials'] }}</div>
            <div class="stat-label">Pending Testimonials</div>
        </div>
        <div class="stat-card">
            <i class="bi bi-book text-success"></i>
            <div class="stat-value">{{ $stats['formations'] }}</div>
            <div class="stat-label">Active Courses</div>
        </div>
        <div class="stat-card">
            <i class="bi bi-newspaper text-info"></i>
            <div class="stat-value">{{ $stats['recent_events'] }}</div>
            <div class="stat-label">Recent News</div>
        </div>
  </div>

  <!-- Content Sections -->
  <div class="row">
      <div class="col-lg-6">
          <!-- Messages Section -->
          <div class="card">
              <div class="card-header">
                  <h2>Recent Messages</h2>
                  <a href="{{ route('admin.messages.index') }} " class="btn btn-sm btn-primary">View All</a>
              </div>
              <div class="card-body">
                  <!-- More message items -->
                  @foreach($recentData['messages'] as $message)
                    <div class="message-item unread">
                        <div class="message-sender">{{ $message->name }}</div>
                        {{-- <div class="message-subject">{{ $message->subject }}</div> --}}
                        <div class="message-preview">{{ Str::limit($message->message, 100) }}</div>
                        <div class="message-date">{{ $message->created_at->format('F j, Y, g:i a') }}</div>
                    </div>
                    @endforeach
              </div>
          </div>

          <!-- Testimonials Section -->
          <div class="card mt-4">
              <div class="card-header">
                  <h2>Pending Testimonials</h2>
                  <a href="{{ route('admin.testimonies.index') }}" class="btn btn-sm btn-primary">Manage</a>
              </div>
              <div class="card-body">
                    @foreach($recentData['testimonials'] as $testimonial)
                        <div class="testimonial-item">
                            <div class="testimonial-author">{{ $testimonial->name }}</div>
                            {{-- <div class="testimonial-content">{{ Str::limit($testimonial->description_en, 100) }}</div> --}}
                            {{-- <div class="testimonial-content">{{$testimonial->description_en }}</div> --}}
                            {{-- <span class="testimonial-status pending">Pending Approval</span> --}}
                            {{-- <div class="mt-2">
                                <button class="btn btn-sm btn-success">Approve</button>
                                <button class="btn btn-sm btn-danger">Reject</button>
                            </div> --}}
                        <div class="testimonial-date">{{ $testimonial->created_at->format('F j, Y, g:i a') }}</div>

                        </div>
                    @endforeach
                  
              </div>
          </div>
      </div>

      <div class="col-lg-6">
          <!-- News Section -->
          <div class="card mt-4">
              <div class="card-header">
                  <h2>School News</h2>
                  <a href=" {{ route('admin.events.create') }} " class="btn btn-sm btn-primary">Add News</a>
              </div>
              <div class="card-body">
                @foreach($recentData['events'] as $event)
                    <div class="news-item">
                        <div class="news-title">{{ $event->title_en }}</div>
                        <div class="news-date">{{ $event->created_at->format('F j, Y, g:i a') }}</div>
                        <div class="news-excerpt"> {{ Str::limit( nl2br(e($event->description_en)), 100) }}</div>
                        <div>
                            <a href="{{ route('admin.events.edit', $event->id) }}"  class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
              </div>
          </div>
      </div>

      <div class="col-lg-12">
        <!-- Courses Section -->
        <div class="card">
            <div class="card-header">
                <h2>Recent Courses</h2>
                <a href="{{ route('admin.formations.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body">
                <div class="row">
                @foreach($recentData['formations'] as $formation)
                <div class="col-md-6">
                    <div class="course-card">
                        <div class="course-image" style="background-image: url('{{ asset($formation->image_url) }}');"></div>
                        <div class="course-body">
                            <div class="course-title">{{ $formation->title_en }}</div>
                            <div class="course-meta">{{ $formation->duree }} months | {{ $formation->reussite }}%</div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.formations.edit', $formation->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('admin.formations.show', $formation->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
      </div>
  </div>
</main>
@endsection













