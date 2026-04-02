# MEMORY - wordpress-login-tracker

**Project:** WordPress Login Tracker  
**Type:** WordPress plugin  
**Author:** Meon Valley Web / Andrew Wilkinson  
**Support:** support@meonvalleyweb.com

## Purpose
Track and monitor WordPress user login activity with detailed statistics and security features.

## Key Details
- **Version:** 1.1.0
- **PHP:** 7.0+
- **WordPress:** 5.0+
- **License:** GPL v2
- **Bedrock Compatible:** Yes

## Features
- Login tracking (success/failed)
- Session duration
- Geolocation (IP-based, city/country)
- Security alerts
- CSV export
- Dashboard widget
- 90-day default retention

## Installation

### Standard
`/wp-content/plugins/custom-login-tracker/`

### Bedrock
`/app/plugins/custom-login-tracker/`

## Configuration
Settings at **Users > Login Tracker Settings**:
- Data retention period
- Location tracking
- Browser/device tracking
- Failed login threshold
- Alert email address
- Dashboard widget visibility

## Files
- `custom-login-tracker.php` — Main plugin
- `includes/` — Core classes
- `assets/` — Plugin assets
- `uninstall.php` — Cleanup

## Roadmap
- Free: Role-based analytics, IP blocking, login limiter, charts
- Pro: AI threat detection, IP reputation, SSO tracking, compliance tools
